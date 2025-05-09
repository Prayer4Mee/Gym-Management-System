<?php
$conn = mysqli_connect("localhost", "root", "", "gymdata") or die("DI GUMANA");

// Get the selected month from the URL parameter or set it to the current month
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : date('m');

// Fetch the necessary data from the database
$query = mysqli_query($conn, "SELECT joining_date, fees FROM membership WHERE MONTH(joining_date) = '$selectedMonth'");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

// Get the number of days in the selected month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, date('Y'));

// Generate an array of days for the selected month
$days = range(1, $daysInMonth);

// Create an array to store fees for each day
$feesByDay = array_fill_keys($days, 0);

// Calculate total fees for each day
foreach ($data as $row) {
    $joining_date = date('j', strtotime($row['joining_date'])); // Extract day from joining_date
    $feesByDay[$joining_date] += $row['fees'];
}

// Generate JSON-encoded strings for days and fees
$days_json = json_encode($days);
$fees_json = json_encode(array_values($feesByDay));

// Create an associative array for the chart data
$chartData = array(
    'days' => $days,
    'fees' => array_values($feesByDay)
);

// Encode the chart data as JSON
$chartData_json = json_encode($chartData);

// Output the JSON data
header('Content-Type: application/json');
echo $chartData_json;
exit;
?>
