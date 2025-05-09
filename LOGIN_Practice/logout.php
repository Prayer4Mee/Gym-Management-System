<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: log-in.php");
exit();
?>
