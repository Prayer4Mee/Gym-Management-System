<?php

$sid = $_GET['no'];

    $conn = mysqli_connect("localhost", "root", "", "gymdata") or die("Connection failed: " . mysqli_connect_error());
	mysqli_query($conn, "DELETE FROM membership WHERE no = $sid") or die('MALI KA QUERY!');

    echo "<script>alert('Data deleted');";
    echo "window.location='membership_details.php';</script>";
?>