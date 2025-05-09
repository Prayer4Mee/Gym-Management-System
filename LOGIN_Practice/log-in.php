<?php
session_start();

if (isset($_SESSION['userlogin'])) { //session means page start
  header("Location: Dashboard.php"); //it meants without userlogin in session you can't go to home page
  exit(); // Add an exit to stop further execution
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG-IN FIRST B!TCH</title>
	<link rel="stylesheet" type="text/css" href="log-in.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<div class="box">
		<div class="container">
			<div class="top-header">
				<header>LOGIN</header>
			</div>
			<form action="jslogin.php" method="post">
			<div class="input-field">
				<input type="text" class="input" placeholder="Username" name="uname" id = "username" required autocomplete="off">
				<i class="bx bx-user"></i>
			</div>
			<div class="input-field">
				<input type="password" class="input" placeholder="Password" name="psw" id="password" required>
				<i class="bx bx-lock-alt"></i>
			</div>
			<div class="input-field">
				<input type="submit" class="submit" value="LOGIN" name="button" id="login">
			</div>
			</form>

			<!-- <div class="bottom">
				<div class="left">
					<input type="checkbox" id="check">
					<label for="check">Remember Me</label>
				</div>
				<div class="right">
					<label><a href="#">Forgot Password?</label>
				</div>
			</div> -->
		</div>
	</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

<script>
    $(function() {
      $('#login').click(function(e) {
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();

        $.ajax({
          type: 'POST',
          url: 'jslogin.php',
          data: {
            username: username,
            password: password,
          },
          success: function(data) {
            if (data === "success") {
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Login Successful!",
                timer: 2000,
              }).then(function() {
                // Redirect to home page after success
                window.location.href = "Dashboard.php";
              });
            } else {
              // Handle unsuccessful login
              Swal.fire({
                position: "center",
                icon: "error",
                title: "Incorrect username or password",
                timer: 2000,
                showClass: {
                  popup: "animate__animated animate__fadeInDown"
                }
                // If failed
              }).then(function(){
                window.location.href = "log-in.php";
              })
            }
          },
        });
      });
    });
  </script>

</html>