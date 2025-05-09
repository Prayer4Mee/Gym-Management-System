

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Receipt</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form - Sagar Developer</title>
    <link rel="stylesheet" href="paystyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
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
                <h3>ANYTIME FITNESS</h3>
                <strong><img src= "assets/fit.png" style="width:20px;height:20px;">AF</strong>
            </div>
            <ul class="list-unstyled components">
                <li class="">
                    <a href="dashboard.php">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        Manage Members
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="gym.php"><i class="fas fa-user-plus"></i> Member Entry Form</a>
                        </li>
                        <li class="">
                            <a href="membership_details.php"><i class="fas fa-edit"></i> Update members</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        Payment Receipt
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="logout.php" class="download">
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
                                <a class="nav-link" href="#"><i class="fas fa-hand-holding-usd"></i> RECEIPT</a>
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
            <!-- End of Navigation Bar -->
<!-- End of Everything -->

<!-- Contents of the Page -->
            <div class="semi-content">
            <!-- <h2>DAPAT PINA BILLBOARD MO</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="line"></div>

            <h2>CONTENT</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="line"></div> -->
            <div class="wrapper1">
            <img src="fitc.png" alt="AnyTime Fitness" class="center" height="150px" width="300px">
        <form action="" method="post">
            <!--Account Information Start-->
            <pre><h6>Receipt No.:               Date: </h6></pre>
            <div class="input_group">
                
                <div class="input_box">
                    <input type="number" placeholder="Receipt No." required class="name2">      
                </div>
                <div class="input_box">
                    
                    <input type="date" placeholder="Date" required class="name2">
                  
                </div>
            </div>
            <pre><h6>Name:                      Membership No.: </h6></pre> 
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Full Name" required class="name2">
                   
                </div>
                <div class="input_box">

                    <input type="text" placeholder="Membership No." required class="name2">
                   
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                <h6>Address:</h6>
                    <input type="text" placeholder="Address" required class="name">
                    
                </div>
            </div>
            
         

            <!--Account Information End-->


            <!--DOB & Gender Start-->
  
            <div class="input_group">
                
                <div class="input_box">
                    
                    <pre><h6>Monthly      Type of Workout          Amount </h6></pre>
                    <input type="number" placeholder="" required class="dob">
                    <input type="text" placeholder="" required class="dob1">
                    <input type="number" placeholder="" required class="dob2">
                </div>
               
            </div>
            <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
              
         
           
            </div>
            <pre><h6>Joining Date:               Expired Date: </h6></pre>
            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="date" placeholder="Exp Month" required class="name1">
                      
                    </div>
                </div>
                
                <div class="input_box">
                    <input type="date" placeholder="Exp Year" required class="name1">
                </div>
            </div>
           
            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                <button onclick="window.print()">Print</button>
                </div>
            </div>

        </form>
    </div>


<!-- The Javascript, para ma slide to the left and to the right yung sidebar lol -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
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