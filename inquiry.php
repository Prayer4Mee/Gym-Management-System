<!DOCTYPE html>

<head>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/se-1.2.0/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/se-1.2.0/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



    <!-- Add the following CSS and JavaScript files to your HTML code -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" /> -->

   

    <link href="css/sidebar.css" rel="stylesheet">
    <meta charset="UTF-8">
   
    <link rel="icon" href="../img/logo.jpg" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
@media (max-width: 400px) {
    .sidebar.close .nav-links li .sub-menu {
        display: none;
    }

    .sidebar {
        width: 78px;
    }

    .sidebar.close {
        width: 0;
    }

    .home-section {
        left: 78px;
        width: calc(100% - 78px);
        z-index: 100;
    }

    .sidebar.close~.home-section {
        width: 100%;
        left: 0;
    }

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    .user-select-none {
        cursor: not-allowed;
    }
}
</style>

<body>


    <body>


        <div class="container">
            <div class="card shadow">
                <div class="card-header">DASHBOARD</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table row-border display hover strip nowrap display"
                            style="width:90%">
                            <thead>
                                <tr>
                               
                                                                        <th>Membership ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>M.I.</th>
                                                                        <th>Number</th>
                                                                        <th>Birth Date</th>
                                                                        <th>Street</th>
                                                                        <th>Barangay</th>
                                                                        <th>City</th>
                                                                        <th>Gender</th>
                                                                        <!-- <th>Action</th> -->
                                                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                          $conn = mysqli_connect("localhost","root","","gymdata") or die("DI GUMANA");
                          $query = "SELECT * FROM membership"; 
                          $result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($result)) {
                            
                            
                        ?>
                                 <tr>
                                                                        <th></th>
                                                                        <th><?php echo $row['membership_id'] ?></th>
                                                                        <th><?php echo $row['first_name'] ?></th>
                                                                        <th><?php echo $row['last_name'] ?></th>
                                                                        <th><?php echo $row['middle_initial'] ?></th>
                                                                        <th><?php echo $row['mobile_number'] ?></th>
                                                                        <th><?php echo $row['street'] ?></th>
                                                                        <th><?php echo $row['brgy'] ?></th>
                                                                        <th><?php echo $row['city'] ?></th>
                                                                        <th><?php echo $row['gender'] ?></th>
                       
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Replying Details for user Inquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form id="inquire-form" class="row">
                    <div class="mb-3">
                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="message1">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="10" readonly></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="message2">Message</label>
                            <textarea class="form-control" id="m1" name="m1" rows="15" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <button type="submit" id="submit" value="submit" class="btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


            </section>


            <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').DataTable({
                    responsive: true,
                    searchable: true

                });



                });

                //   
          
            </script>
            <script>
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e) => {
                    let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                    arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", () => {
                sidebar.classList.toggle("close");
            });
            </script>
    </body>

    </html>