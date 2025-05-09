<?php
require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the user exists in the adminsss table
$sql = "SELECT * FROM adminsss WHERE username = ? LIMIT 1";
$stmt = $db->prepare($sql);
$stmt->execute([$username]);

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password using password_verify
    if (password_verify($password, $user['password'])) {
        // Start the session and set the session variable
        session_start();
        $_SESSION['userlogin'] = $user['username'];
        header("Location: Dashboard.php"); // Redirect to the dashboard after successful login
        exit();
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "Username not found!";
}
?>
