

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form - Sagar Developer</title>
    <link rel="stylesheet" href="regisstyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
    
    <!-- CSS source -->
    <link rel="stylesheet" href="Main_page.css">

    <!-- Sim Registration Source -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="sim_registration.css"> -->
</head>

<body>
<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
               <a href="Dashboard.php"> <img src="fit.png" alt="AnyTime Fitness" height="75px" width="200px"></a>

            <!--    <h3>ANYTIME FITNESS</h3> -->
             
            </div>
            <ul class="list-unstyled components">
                <li class="">
                    <a href="Dashboard.php">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        Manage Members
                    </a>
                    <ul class="collapse list-unstyled active" id="pageSubmenu">
                        <li>
                            <a href="gym.php"><i class="fas fa-user-plus active"></i> Member Entry Form</a>
                        </li>
                        <li class="active">
                            <a href="membership_details.php"><i class="fas fa-edit"></i> Update members</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pay1.php">
                        <i class="fas fa-hand-holding-usd"></i>
                        Payments
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="last_login.php" class="download">
                        <p id="middle"><i class="fas fa-power-off"></i> Sign Out</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- End of Sidebar -->
        <!-- Navigation Bar and pg content so whenever closing the sidebar-->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <!-- Menu Bar -->
                    <button type="button" id="sidebarCollapse" class="btn-info">
                        <i class="fas fa-bars"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <!-- End of Menu Bar -->
                    <!-- Different Clickable content of Nav bar -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="regis.php"><i class="fas fa-user-plus"></i> ADMIN       </a>
                            <!-- </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                            <!-- For Manage Members -->
                        </ul>
                    </div>
                </div>
            </nav>
    <div class="wrapper1">
        <h2>Payment Form</h2>
        <form action="conn.php" method="POST">
            <!--Account Information Start-->
            <h4>Account</h4>
           
           
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="username" placeholder="Username" required class="name">
                   
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="password" name="password" placeholder="Password" required class="name">
                    
                </div>
            </div>
            <!--Account Information End-->


          
            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                    <button type="submit" name="submit">Register</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS  - smooth slide --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


</body>

</html>