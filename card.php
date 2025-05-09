<?php


$conn = mysqli_connect("localhost", "root", "", "gymdata") or die("Failed to connect to the database.");

// Calculate annual revenue
$query = mysqli_query($conn, "SELECT SUM(fees) AS annual_revenue FROM membership");
$row = mysqli_fetch_assoc($query);
$annual_revenue = $row['annual_revenue'];

// Calculate monthly revenue
$currentMonth = date('m');
$currentYear = date('Y');
$query = mysqli_query($conn, "SELECT SUM(fees) AS monthly_revenue FROM membership WHERE MONTH(joining_date) = $currentMonth AND YEAR(joining_date) = $currentYear");
$row = mysqli_fetch_assoc($query);
$monthly_revenue = $row['monthly_revenue'];

// Count the number of gym members
$query = mysqli_query($conn, "SELECT COUNT(*) AS member_count FROM membership");
$row = mysqli_fetch_assoc($query);
$member_count = $row['member_count'];

// Store the values in session variables
$_SESSION['annual_revenue'] = $annual_revenue;
$_SESSION['monthly_revenue'] = $monthly_revenue;
$_SESSION['member_count'] = $member_count;
?>

<!-- Continue with the rest of your card.php code -->
