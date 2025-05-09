<?php 
session_start();
require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if ($result) {
  $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
  if ($stmtselect->rowCount() > 0) {
    $_SESSION['userlogin'] = $user['username'];
    echo "success";
  } else {
    echo "error";
  }
} else {
  echo "error";
}
?>
