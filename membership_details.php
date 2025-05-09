

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Members</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/se-1.2.0/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/se-1.2.0/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- CSS source -->
    <link rel="stylesheet" href="Main_page.css">
    <link rel="stylesheet" href="membership_details.css">
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
                            <a href="gym.php"><i class="fas fa-user-plus"></i> Member Entry Form</a>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fas fa-edit"></i> Update members</a>
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

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fas fa-edit"></i> UPDATE MEMBERS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="semi-content">
                <!-- Your content here -->
            </div>

            <div class="container">
                <!-- <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Members Details</h3>
                        </div>
                    </div> -->

                    <div class="card-body bg-color2">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table row-border display hover strip nowrap display" style="width:90%">
                                    <thead>
                                        <tr>
                                        <th>NO</th>
                                            <th>Membership ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>M.I.</th>
                                            <th>Number</th>
                                            <th>Birth Date</th>
                                            <th>Email</th>
                                            <th>Street</th>
                                            <th>Barangay</th>
                                            <th>City</th>
                                            <th>Gender</th>
                                            <!-- Joining Date and Fees are missing here, let's add them -->
                                            <th>Joining Date</th>
                                            <th>Fees</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          $no = 1;
                                            $conn = mysqli_connect("localhost", "root", "", "gymdata") or die("DI GUMANA");
                                            $query = "SELECT * FROM membership";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                                $sid = $row['no']
                                        ?>
                                        <tr>
                                        <th style="color:black"><b><?php echo $no++?></b></th>
                                            <th style="color:black"><?php echo $row['membership_id'] ?></th>
                                            <th style="color:black"><?php echo $row['first_name'] ?></th>
                                            <th style="color:black"><?php echo $row['last_name'] ?></th>
                                            <th style="color:black"><?php echo $row['middle_initial'] ?></th>
                                            <th style="color:black"><?php echo $row['mobile_number'] ?></th>
                                            <th style="color:black"><?php echo $row['date_of_birth'] ?></th>
                                            <th style="color:black"><?php echo $row['email'] ?></th>
                                            <th style="color:black"><?php echo $row['street'] ?></th>
                                            <th style="color:black"><?php echo $row['brgy'] ?></th>
                                            <th style="color:black"><?php echo $row['city'] ?></th>
                                            <th style="color:black"><?php echo $row['gender'] ?></th>
                                            <th style="color:black"><?php echo $row['joining_date'] ?></th>
                                            <th style="color:black"><?php echo $row['fees'] ?></th>
                                            <th>
                                            <!-- <button class="btn btn-sm btn-primary edit-button" data-toggle="modal" data-target="#editModal" data-member-id="<?php echo $row['membership_id']; ?>">Edit</button> -->
                                            <?php echo "<a href='membership_edit.php?no=$sid' class='btn btn-sm btn-primary'>EDIT</a>"; ?>
                                            <?php echo "<button class='btn btn-sm btn-danger delete-button' data-member-id='$sid'>DELETE</button>"; ?>
                                            </th>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="edit_member.php" method="POST">
                        <input type="hidden" name="membership_id" id="editMembershipID" value="">
                        <!-- Add input fields here for editing member details -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" form="editForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this member?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" id="deleteButton" class="btn btn-danger">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>


<script type="text/javascript">
    $(document).ready(function() {
    // Handle click event of delete button
    $('.delete-button').click(function() {
        var memberId = $(this).data('member-id');
        // Show the delete confirmation modal
        if (confirm('Are you sure you want to delete this member?')) {
            // If the user confirms, redirect to the delete page
            window.location.href = 'membership_delete.php?no=' + memberId;
        }
    });
});

</script>
    <script type="text/javascript">
        $(document).ready(function () {
    // Handle click event of edit button
    $('.edit-button').click(function () {
        var memberId = $(this).data('member-id');
        // Make an AJAX request to fetch member details
        $.ajax({
            url: 'edit_member.php',
            type: 'GET',
            data: { membership_id: memberId },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    var memberDetails = response.memberDetails;
                    // Populate the edit form in the modal with member details
                    $('#editMembershipID').val(memberDetails.membership_id);
                    // Populate other input fields with member details
                    // Example: $('#editFirstName').val(memberDetails.first_name);
                    // ...
                    // Show the edit modal
                    $('#editModal').modal('show');
                } else {
                    // Show an error message
                    alert('Failed to fetch member details.');
                }
            },
            error: function () {
                // Show an error message
                alert('Failed to fetch member details.');
            }
        });
    });
});

    </script>


    <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').DataTable({
                  
                     });
                });

                //   
          
            </script>
    <script type="text/javascript">
        $(document).ready(function () {

       

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>