<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Entry Form</title>

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
                <h3>Bull Sh1t</h3>
                <strong>BS</strong>
            </div>
            <ul class="list-unstyled components">
                <li class="">
                    <a href="Main_page.html">
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
                            <a href="#"><i class="fas fa-edit"></i> Update members</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        Payments
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">
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
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
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
                                <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> MEMBERS</a>
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
                <div class="container">
                    <div class="">
                    <form action="edit_member.php" method = "POST">
                        
	<?php
		
		// echo $sid;
 $sid = $_GET['no'];
        $conn = mysqli_connect("localhost", "root", "", "gymdata") or die("DI GUMANA");
       

		//select
        
		$query = mysqli_query($conn, "SELECT * FROM membership WHERE no=$sid")or die('MALI KA QUERY!');
		$row = mysqli_fetch_array($query)or die('MALI KA FETCH!');
	  ?>
                        <div class="form first">
                            <div class="details personal">
                            <span class="title" id="kilala">Personal Details</span>
                                <div class="fields">
                                    <div class="input-field">
                                    <input type="text" class="form-control" name="no" value="<?php echo $row['no'] ?>" hidden>
                                        <label class="col mb-2">First name</label>
                                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
                                        <label class="col mb-2">Last Name </label>
                                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                                        <label class="col mb-2">Middle Initial </label>
                                        <input type="text" class="form-control" name="middle_initial" maxlength="1" value="<?php echo $row['middle_initial'] ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control" name="mobile_number"  value="<?php echo $row['mobile_number'] ?>" minlength="11" maxlength="13" >
                                    </div>

                                    <div class="input-field">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth"  value="<?php echo $row['date_of_birth'] ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>" >
                                    </div>

                                    <div class="fields">
                                        <div class="input-field">
                                            <label>Address</label>
                                                <input type="text" class="form-control" name="street" value="<?php echo $row['street'] ?>" >
                                                <input type="text" class="form-control" name="brgy" value="<?php echo $row['brgy'] ?>" >
                                                <input type="text" class="form-control" name="city"  value="<?php echo $row['city'] ?>" >

                                        </div>

                                        <div class="input-field">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control"  value="<?php echo $row['gender'] ?>" >
                                              
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <!-- <option  value="others">Others</option> -->
                                            </select>
                                        </div>
                                    
                                        <div class="input-field">
                                            <label>Membership ID</label>
                                            <input type="text" class="form-control" name="membership_id" value="<?php echo $row['membership_id'] ?>" maxlength="12" size="15" readonly>
                                        
                                            <div class="input-field">
                                                <label>Joining Date</label>
                                                <input type="date" class="form-control" name="joining_date" value="<?php echo $row['joining_date'] ?>"  readonly >
                                            </div>

                                            <div class="fields">
                                                <div class="input-field">
                                                    <label>Fees</label>
                                                    <input type="text" class="form-control" name="fees" maxlength="7" value="<?php echo $row['fees'] ?>"  readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <br>
                        <input class="btn btn-primary" id="submit_design" type="submit" name="submit">
                    </form>
                </div>
            </div>
        
        <!-- up to the navigation bar -->
    </div>
    <!-- End -->
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