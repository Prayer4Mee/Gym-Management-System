<?php
    // Handle the editing of member details

    // Retrieve the membership ID from the request
    $no = $_POST['no'];
    $membershipId = $_POST['membership_id'];
    // Retrieve the updated member details from the request
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $middleInitial = $_POST['middle_initial'];
    $mobileNumber = $_POST['mobile_number'];
    $dateOfBirth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $joiningDate = $_POST['joining_date'];
    $fees = $_POST['fees'];

    // Perform the update operation in the database
    $conn = mysqli_connect("localhost", "root", "", "gymdata") or die("Connection failed: " . mysqli_connect_error());
    $query = "UPDATE membership SET 
                first_name='$firstName',
                last_name='$lastName',
                middle_initial='$middleInitial',
                mobile_number='$mobileNumber',
                date_of_birth='$dateOfBirth',
               email='$email',
                street='$street',
                brgy='$brgy',
                city='$city',
                gender='$gender',
                joining_date='$joiningDate',
                fees='$fees'
                WHERE no='$no'";
    $result = mysqli_query($conn, $query);
    echo "<script>alert('Data updated');";
    echo "window.location='membership_details.php';</script>";

    // // Return the response
    // if ($result) {
    //     echo json_encode(array('status' => 'success', 'message' => 'Member details updated successfully.'));
    // } else {
    //     echo json_encode(array('status' => 'error', 'message' => 'Failed to update member details.'));
    // }
?>
