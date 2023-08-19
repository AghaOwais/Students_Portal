<?php 
                                        session_start();
                                        if (isset($_SESSION["emaill"])) 
                                        {
                                            $ID=$_SESSION["ID"];
                                            $email=$_SESSION["emaill"];
                                            $name=$_SESSION["name"];
                                            $pass=$_SESSION["pass"];
                                            $gender=$_SESSION["gender"];
                                            $phone=$_SESSION["phone"];
                                            $announce=$_SESSION["announce"];
                                            $date=$_SESSION["date"];
                                            $cnic=$_SESSION["cnic"];
                                            $adress=$_SESSION["adress"];
                                            $city=$_SESSION["city"];
                                            $c1=$_SESSION["c1"];
                                            $c2=$_SESSION["c2"];
                                            $c3=$_SESSION["c3"];
                                            $c4=$_SESSION["c4"];
                                            $c5=$_SESSION["c5"];
                                            $c6=$_SESSION["c6"];

                                        }
                                        else
                                        {
                                            header("Location:index.php");
                                        }
                                     ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>student portal</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="studentportal.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Student Portal</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <span>Settings</span></a>
            </li>
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                     <?php
                                        echo $email;
                                       ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php echo $name ?>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    <div class="row">

                        
                        </div>

                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">basic info</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <!--  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                        </a>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php 
                                    echo "Student Name: ".$name;
                                    echo "<br>";
                                    echo "<br>";
                                    echo " email: ".$email;
                                    echo "<br>";
                                    echo "<br>";
                                    echo " Phone no: ".$phone;
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    ?>
                                    <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">change password</h6>
                                     </div>
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    <br>
                                    <form action="changepass.php" method="POST">

                                         <input placeholder="old password" name="oldpass" class="form-control"  type="password">
                                        <br>
                                        <input placeholder="New Password" name="newpass1" class="form-control"  type="password">
                                        <input placeholder="confirm password" name="newpass2" class="form-control"  type="password">
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <br>
                                    <br>
                                    <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">change phone number</h6>
                                     </div>
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    <form action="changephonenumber.php" method="POST">
                                        <br>
                                        <br>
                                        <input placeholder="Enter New Number" name="newnumber" class="form-control"  type="text">
                                        <br>
                                        <input placeholder="Confirm Password" name="conformpass" class="form-control"  type="password">
                                        <br>
                                        <!-- <button onclick="show()">Confirm</button> -->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- Pie Chart -->
                        
                    </div>

                    <!-- Content Row -->
                    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
<!-- <script type="text/javascript">
        function show()
        {
             var e=/^[+]{1}[9]{1}[2]{1}-[0-9]{10}$/;
            
                if( document.getElementById("newnumber").value.search(e)==-1)
                {
                    // alert(" added sucessfully")
                    <?php 
                        // echo "ok"
                    ?>
                }
                else
                {
                     // alert("student added sucessfully")
                }
        }
    </script> -->
</html>