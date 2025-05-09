<?php
$conn = mysqli_connect("localhost", "root", "", "gymdata") or die("DI GUMANA");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$joiningDate = '';
$expirationDate = '';
$fees = '';
$remainingDays = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input values from the form
    $membership_id = $_POST['membership_id'];
    $email = $_POST['email'];

    // Query to retrieve data based on membership_id and email
    $query = "SELECT joining_date, expiration_date, fees FROM membership WHERE membership_id = $membership_id AND email = '$email'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        // Fetch the row
        $row = mysqli_fetch_array($result);

        // Get the joining_date, expiration_date, and fees
        $joiningDate = $row['joining_date'];
        $expirationDate = $row['expiration_date'];
        $fees = $row['fees'];

        // Create DateTime objects from the strings
        $joinedDateTime = new DateTime($joiningDate);
        $expirationDateTime = new DateTime($expirationDate);

        // Calculate the difference between the dates
        $difference = $expirationDateTime->diff($joinedDateTime);

        // Access the difference values
        $remainingDays = $difference->days;
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Membership Details</title>
</head>
<body>
    <h1>Membership Details</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="membership_id">Membership ID:</label>
        <input type="text" id="membership_id" name="membership_id" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php if ($joiningDate !== '' && $expirationDate !== '' && $fees !== ''): ?>
    <h2>Membership Details:</h2>
    <p>Joining Date: <?php echo $joiningDate; ?></p>
    <p>Expiration Date: <?php echo $expirationDate; ?></p>
    <p>Fees: <?php echo $fees; ?></p>
    <p>Remaining Days: <?php echo $remainingDays; ?></p>
<?php endif; ?>
</body>
</html>
