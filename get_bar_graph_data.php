<?php
$conn = mysqli_connect("localhost", "root", "", "gymdata") or die("Connection failed");

// Retrieve data for the bar graph
$query = "SELECT MONTH(joining_date) AS month, SUM(fees) AS total_fees FROM membership GROUP BY MONTH(joining_date)";
$result = mysqli_query($conn, $query);

$labels = array();
$data = array();

// Initialize an array to hold the fees for all months (initialize with 0)
$monthlyFees = array_fill(1, 12, 0);

while ($row = mysqli_fetch_assoc($result)) {
    $month = $row['month'];
    $fees = $row['total_fees'];

    // Store the fees for the corresponding month
    $monthlyFees[$month] = $fees;
}

// Map month numbers to month names
$months = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
);

// Populate the labels and data arrays
for ($i = 1; $i <= 12; $i++) {
    $labels[] = $months[$i];
    $data[] = $monthlyFees[$i];
}

// Prepare the data for JSON response
$response = array(
    'labels' => $labels,
    'data' => $data
);

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
