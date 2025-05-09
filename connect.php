<?php 

$conn = mysqli_connect("localhost","root","","gymdata") or die("DI GUMANA");

    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_initial = $_POST['middle_initial'];
    $mobile_number = $_POST['mobile_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $membership_id = $_POST['membership_id'];
    $joining_date = $_POST['joining_date'];
    $fees = $_POST['fees'];
    
    // Check if the membership ID already exists
        $query = mysqli_query($conn, "SELECT membership_id FROM membership WHERE membership_id = '$membership_id'");
            if (mysqli_num_rows($query) > 0) {
    // Display an alert if membership ID already exists
    echo "<script>alert('Duplicate data found! Please enter a different membership ID.');";
    echo "window.location='gym.php';</script>";
} else {
    // Insert the data into the database
    mysqli_query($conn, "INSERT INTO membership(membership_id, first_name, last_name, middle_initial, mobile_number, date_of_birth,email, street, brgy, city, gender, joining_date, fees)
    VALUES
    ('$membership_id', '$first_name', '$last_name', '$middle_initial', '$mobile_number', '$date_of_birth', '$email','$street', '$brgy', '$city', '$gender', '$joining_date', '$fees')") or die("DI PUMASOK bobo");
    
    // Display a success message
    echo "<script>alert('Data submitted successfully.');</script>";
    header('location: membership_details.php');
    // Redirect to the desired page
    
}
?>