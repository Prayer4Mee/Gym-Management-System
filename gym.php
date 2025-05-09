

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
    <style>
    .name-inputs {
        display: flex;
        align-items: center;
    }

    .name-inputs input {
        margin-right: 10px;
    }
    .small-input {
        width: 50px; /* Adjust the width to your preference */
    }
    .med-input {
        width: 200px; /* Adjust the width to your preference */
    }
    .big-input {
        width: 430px; /* Adjust the width to your preference */
    }
</style>
</style>






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
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        Manage Members
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-user-plus"></i> Member Entry Form</a>
                        </li>
                        <li class="active">
                            <a href="membership_details.php"><i class="fas fa-edit"></i> Update members</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pay1.php">
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
                    <form action="connect.php" method = "POST">
                        <div class="form first">
                            <div class="details personal">
                            <span class="title" id="kilala">Personal Details</span>
                                <div class="fields">
                                <label class="col mb-2">Full Name</label>
                                    <div class="input-field name-inputs">
                                        <!-- <label class="col mb-2">Full Name</label> -->
                                        <input type="text" class="form-control big-input" name="first_name" placeholder="First Name" required>
                                        <input type="text" class="form-control big-input" name="last_name" placeholder="Last Name" required>
                                        <input type="text" class="form-control small-input" name="middle_initial" maxlength="1" placeholder="M.I." required>
                                    </div>
                                    <label class="col mb-2">Mobile Number</label> 
                                    <div class="input-field">
                                        <!-- <label>Mobile Number</label> -->
                                        <input type="tel" class="form-control" name="mobile_number" placeholder="09XX-XXX-XXXX" minlength="11" maxlength="13" required>
                                    </div>
                                    <label class="col mb-2">Date of Birth</label>
                                    <div class="input-field">
                                        <!-- <label>Date of Birth</label> -->
                                        <input type="date" class="form-control" name="date_of_birth" required>
                                    </div>
                                    
                                    <label class="col mb-2">Email</label>
                                    <div class="input-field">
                                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" pattern="[a-zA-Z0-9._%+-]+@gmail\.com" required>
                                    <!-- <small class="form-text text-muted">Please enter a valid Gmail address.</small> -->
                                    </div>


                                    <div class="fields">
                                    <label class="col mb-2">Address</label>
                                        <div class="input-field name-inputs">
                                            <!-- <label>Address</label> -->
                                                <input type="text" class="form-control big-input" name="street" placeholder="Unit # Street" required>
                                                <input type="text" class="form-control big-input" name="brgy" placeholder="Brgy" required>
                                                <input type="text" class="form-control big-input" name="city" placeholder="City" required>

                                        </div>
                                        <label label class="col mb-2">Gender</label>
                                        <div class="input-field">
                                            <!-- <label>Gender</label> -->
                                            <select name="gender" class="form-control" required>
                                                <option disabled selected> Select </option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <!-- <option  value="others">Others</option> -->
                                            </select>
                                        </div>
                                        <label class="col mb-2">Membership ID</label>
                                            <div class="input-field">
                                            <!-- <label>Membership ID</label> -->
                                            <input type="text" class="form-control" name="membership_id" placeholder="Membership ID" maxlength="12" size="15" required>
                                            <label class="col mb-2">Joining Date</label>
                                            <div class="input-field">
                                                <!-- <label>Joining Date</label> -->
                                                <input type="date" class="form-control" name="joining_date" required readonly>
                                            </div>

                                            <div class="fields">
                                            <label class="col mb-2">Fees</label>
                                                <div class="input-field">
                                                    <!-- <label>Fees</label> -->
                                                    <input type="text" class="form-control" name="fees" maxlength="7" placeholder="₱" required>
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


<!-- Joining Date Fix -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date();
        var year = today.getFullYear();
        var month = (today.getMonth() + 1).toString().padStart(2, '0');
        var day = today.getDate().toString().padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;

        var joiningDateInput = document.getElementsByName('joining_date')[0];
        joiningDateInput.value = formattedDate;
    });
</script>


</body>

</html>