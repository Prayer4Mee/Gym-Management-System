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
	<title>LOG-IN</title>
    <link rel="stylesheet" href="last_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
    
</style>
<body>
	<div class="wrapper">
        <div class="container main">
            <div class="row">

                <div class="col-md-6 side-image">
              
                  
                    <div class="text">
                    <!-- <img src="assets/10.jpg"width="500" height="600"> -->
                   
                    <!-------Image-------->
                     <!--   <p>Join the Community of Fitness Goals <i>- GYM NAME</i></p> -->
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <form action="jslogin.php" method="POST"> 
                            <header>LOGIN</header>
                            <div class="input-field">
                                <input type="text" id="username" class="input" required autocomplete="off" name="username">
                                <label for="email">Username</label>
                            </div>

                            <div class="input-field">
                                <input type="password" class="input" id="password" required name="password">
                                <label for="password">Password</label>
                            </div>
                            
                            <div class="input-field">
                                <input type="submit" class="submit btn-btn primary" id="login" name="button" value="LOGIN" >
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/5832796ace.js" crossorigin="anonymous"></script>
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
                timer: 1000,
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
                timer: 1000,
                showClass: {
                  popup: "animate__animated animate__fadeInDown"
                }
              }).then(function(){
                window.location.href = "last_login.php";
              })
            }
          },
        });
      });
    });
  </script>
</html>