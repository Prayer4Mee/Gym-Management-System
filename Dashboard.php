<?php
    
session_start();
    
    $username = $_SESSION['userlogin'];

     if ($username == "" || empty($username)) {
      header('Location: last_login.php');
     }

	if(!isset($_SESSION['userlogin'])){
		header("Location: last_login.php");
	} ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

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
                <h3>ANYTIME FITNESS</h3>
                <strong><img src= "assets/fit.png" style="width:20px;height:20px;">AF</strong>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
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
                                <a class="nav-link" href="#"> <img src= "assets/logo.png" style="width:20px;height:20px;">DASHBOARD</a>
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
                    <!-- Three rows -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                        <!-- Include the card.php file -->
                        <?php include 'card.php'; ?>

                        <!-- HTML code for the dashboard -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <a href="payment.php">Annual Revenue<br>
                                        <span id="annualRevenueMonthYear">&#8369; <?php echo isset($_SESSION['annual_revenue']) ? number_format($_SESSION['annual_revenue'], 2) : '0.00'; ?></span>
                                        </a>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <a href="payment.php">Monthly Revenue<br>
                                        <span id="monthlyRevenueMonthYear">&#8369; <?php echo isset($_SESSION['monthly_revenue']) ? number_format($_SESSION['monthly_revenue'], 2) : '0.00'; ?></span>
                                        </a>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <a href="membership_details.php">MEMBERS<br>
                                        <span id="membersMonthYear"><?php echo isset($_SESSION['member_count']) ? $_SESSION['member_count'] : 0; ?></span>
                                        </a>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="membership_details.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><a href="#">RENEW SUBSCRIPTION <br> <span id="renewSubscriptionMonthYear"></span></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="membership_details.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- End of Cards -->
                        <!-- Charts -->
                        <div class="card-header">
                        <select id="monthPicker" onchange="handleMonthChange(this)">
                            <option value="" disabled selected>Select a month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                          </select>
                        </div>
                          

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        This Month's income
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="55"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Income for 2023
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="55"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
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
    <!-- Chart -->
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Charts sh1ts -->
    <!-- Left Chart -->

    <?php
$conn = mysqli_connect("localhost", "root", "", "gymdata") or die("DI GUMANA");

// Get the selected month from the URL parameter or set it to the current month
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : date('m');

// Fetch the necessary data from the database
$query = mysqli_query($conn, "SELECT joining_date, fees FROM membership WHERE MONTH(joining_date) = '$selectedMonth'");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

// Get the number of days in the selected month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, date('Y'));

// Generate an array of days for the selected month
$days = range(1, $daysInMonth);

// Create an array to store fees for each day
$feesByDay = array_fill_keys($days, 0);

// Calculate total fees for each day
foreach ($data as $row) {
    $joining_date = date('j', strtotime($row['joining_date'])); // Extract day from joining_date
    $feesByDay[$joining_date] += $row['fees'];
}

// Generate JSON-encoded strings for days and fees
$days_json = json_encode($days);
$fees_json = json_encode(array_values($feesByDay));
?>

<script>
    // Handle the month change event
    function handleMonthChange(select) {
        var selectedMonth = select.value;
        updateChartData(selectedMonth);
    }

    // Function to update the chart data
    function updateChartData(selectedMonth) {
        fetch('getChartData.php?month=' + selectedMonth)
            .then(response => response.json())
            .then(data => {
                var days = data.days;
                var fees = data.fees;
                updateChart(days, fees);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    // Update the chart with new data
    function updateChart(days, fees) {
        var ctx = document.getElementById('myAreaChart').getContext('2d');
        if (window.chart) {
            // If chart instance exists, destroy it first
            window.chart.destroy();
        }
        window.chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: days,
                datasets: [{
                    label: 'Fees',
                    data: fees,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }]
            },
            options: {
                // Add any additional chart options here
            }
        });
    }

    // Get the current month
    var currentMonth = (new Date().getMonth() + 1).toString().padStart(2, '0'); // Zero-pad the month value

    // Set the selected month in the selector
    document.getElementById('monthPicker').value = currentMonth;

    // Initial chart rendering
    updateChartData(currentMonth);
</script>



<!-- Right Chart -->


<script>
  // Get the chart canvas element
  var barChart = document.getElementById('myBarChart');

  // Create the bar graph using Chart.js
  var barChartCtx = barChart.getContext('2d');

  // Declare the initial bar chart data
  var initialBarChartData = {
    labels: [],
    datasets: [{
      label: 'Income',
      data: [],
      backgroundColor: 'rgba(75, 192, 192, 0.5)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1
    }]
  };

  var barChartConfig = {
    type: 'bar',
    data: initialBarChartData,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  var barChartInstance = new Chart(barChartCtx, barChartConfig);

  // Fetch the bar graph data from the server
  getBarChartData();

  // Function to retrieve the bar chart data from the server
  function getBarChartData() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_bar_graph_data.php', true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);

        barChartInstance.data.labels = response.labels;
        barChartInstance.data.datasets[0].data = response.data;
        barChartInstance.update();
      }
    };
    xhr.send();
  }
</script>




<script src="../system/js/scripts.js"></script>

    <!-- For those stupid cards -->
    
    <!-- For Auto Date -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">

    

    <!-- Cards -->
    <?php
        $conn = mysqli_connect("localhost", "root", "", "gymdata") or die("Failed to connect to the database.");

        // Calculate annual revenue
        $query = mysqli_query($conn, "SELECT SUM(fees) AS annual_revenue FROM membership");
        $row = mysqli_fetch_assoc($query);
        $annual_revenue = $row['annual_revenue'];

        // Calculate monthly revenue
        $currentMonth = date('m');
        $currentYear = date('Y');
        $query = mysqli_query($conn, "SELECT SUM(fees) AS monthly_revenue FROM membership WHERE MONTH(joining_date) = $currentMonth AND YEAR(joining_date) = $currentYear");
        $row = mysqli_fetch_assoc($query);
        $monthly_revenue = $row['monthly_revenue'];

        // Count the number of gym members
        $query = mysqli_query($conn, "SELECT COUNT(*) AS member_count FROM membership");
        $row = mysqli_fetch_assoc($query);
        $member_count = $row['member_count'];
    ?>
    


    <!-- Sidebar -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>