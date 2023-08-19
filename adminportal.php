<?php 
                                        session_start();
                                        if (isset($_SESSION["email"])) 
                                        {
                                            $ID=$_SESSION["ID"];
                                            $email=$_SESSION["email"];
                                            $name=$_SESSION["name"];
                                            $pass=$_SESSION["pass"];
                                            $gender=$_SESSION["gender"];
                                            $phone=$_SESSION["phone"];
                                            $cnic=$_SESSION["cnic"];
                                            
                                            // student details for adminportal

                                           
                                            $semail=$_SESSION["semail"];
                                            $sname=$_SESSION["sname"];
                                            $sgender=$_SESSION["sgender"];
                                            $sphone=$_SESSION["sphone"];
                                            $sadress=$_SESSION["sadress"];
                                            $scnic=$_SESSION["scnic"];
                                            $sdate=$_SESSION["sdate"];
                                            $sfather=$_SESSION["sfather"];
                                            $scity=$_SESSION["scity"];
                                            $sc1=$_SESSION["sc1"];
                                            $sc2=$_SESSION["sc2"];
                                            $sc3=$_SESSION["sc3"];
                                            $sc4=$_SESSION["sc4"];
                                            $sc5=$_SESSION["sc5"];
                                            $sc6=$_SESSION["sc6"];


                                             
                                        }
                                        else
                                        {
                                            echo '<script>alert("you are already loggedout"); location.replace(document.referrer);</script>';
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

    <title>admin portal</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminportal.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Admin Portal</div>
            </a>
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="adminportal.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Student Services</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="dropcourserequests.php">Course Drop Requests</a>
                        <a class="collapse-item" href="contactusadmin.php">Contact Us Messages</a>
                    </div>
                </div>
            </li>

           <!--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <hr class="sidebar-divider">

            <!-- Heading -->
           <!--  <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Services</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="studentallinfo.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add student</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">     
                       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
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

                       
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter"><?php 

                                    $check=0;
                                                            $con = new mysqli("localhost","root","","coursedropdata");
                                                            $q = "select * from info";
                                                            $rs = $con->query($q);

                                                            while ($r = $rs->fetch_assoc())
                                                            {
                                                                $check=$check+1;
                                                            }
                                                            $con->close();
                                                            $con = new mysqli("localhost","root","","contactus");
                                                            $q = "select * from info";
                                                            $rs = $con->query($q);

                                                            while ($r = $rs->fetch_assoc())
                                                            {
                                                                $check=$check+1;
                                                            }

                                                            echo $check;
                                 ?></span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    inbox
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                   
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">
                                            <?php 
                                            $con = new mysqli("localhost","root","","coursedropdata");
                                            $q = "select * from info";
                                            $rs = $con->query($q);

                                        
                                            while ($r = $rs->fetch_assoc())
                                            {
                                                $idd=$r["sid"];
                                                 echo "drop course request";
                                                 echo"<br>";
                                                 echo " from student";
                                                 echo "Student ID:&nbsp&nbsp".$idd."<br>";
                                            }

                                            $con->close();
                                                            $con = new mysqli("localhost","root","","contactus");
                                                            $q = "select * from info";
                                                            $rs = $con->query($q);

                                                            while ($r = $rs->fetch_assoc())
                                                            {
                                                                $e=$r["email"];
                                                                echo "Message in ContactUs from:";
                                                                echo $e."<br>";
                                                            }

                                            ?>
                                        </div>
                                        <hr class="sidebar-divider my-0">
                                    </div>
                                </a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                                <?php echo $email; ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php echo $name; ?>
                                </a>
                                <a class="dropdown-item" href="settingsforadmin.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Subjects</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">to be added!</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">total students enrolled
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php
                                                            $check=0;
                                                            $con = new mysqli("localhost","root","","studentinformation");
                                                            $q = "select * from info";
                                                            $rs = $con->query($q);

                                                            while ($r = $rs->fetch_assoc())
                                                            {
                                                                $check=$check+1;
                                                            }
                                                            echo $check;
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                                                 $check=0;
                                                            $con = new mysqli("localhost","root","","coursedropdata");
                                                            $q = "select * from info";
                                                            $rs = $con->query($q);

                                                            while ($r = $rs->fetch_assoc())
                                                            {
                                                                $check=$check+1;
                                                            }
                                                            $con->close();
                                                            $con = new mysqli("localhost","root","","contactus");
                                                            $q = "select * from info";
                                                            $rs = $con->query($q);

                                                            while ($r = $rs->fetch_assoc())
                                                            {
                                                                $check=$check+1;
                                                            }
                                                            
                                                            echo $check;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Student info</h6>
                                    <div class="dropdown no-arrow">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="findstudentinfo.php" method="POST">
                                        <div class="container mt-3">
                                       <div class="input-group mb-3">
                                         <input type="text" name=studentid class="form-control" placeholder="Student ID">
                                         <div class="input-group-append">
                                           <button class="btn btn-primary" >search</button>  
                                          </div>
                                       </div>
                                    </div>
                                    </form>
                                    <?php
                                    if ($sname==0)
                                     {
                                    
                                    }
                                    else{
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Name:&nbsp&nbsp";
                                        echo $sname;
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "CNIC:&nbsp&nbsp";
                                        echo $scnic;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Email:&nbsp&nbsp";
                                        echo $semail;
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Gender:&nbsp&nbsp";
                                        echo $sgender;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Father Name:&nbsp&nbsp";
                                        echo $sfather;
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Phone:&nbsp&nbsp";
                                        echo $sphone;
                                        echo "<br>";
                                        echo "<br>";
                                         echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "DOB:&nbsp&nbsp";
                                        echo $sdate;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Adress:&nbsp&nbsp";
                                        echo $sadress;
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "City:&nbsp&nbsp";
                                        echo $scity;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Courses&nbsp&nbsp";
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Course 1:&nbsp&nbsp";
                                        echo $sc1;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Course 2:&nbsp&nbsp";
                                        echo $sc2;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Course 3:&nbsp&nbsp";
                                        echo $sc3;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Course 4:&nbsp&nbsp";
                                        echo $sc4;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Course 5:&nbsp&nbsp";
                                        echo $sc5;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                        echo "Course 6:&nbsp&nbsp";
                                        echo $sc6;


                                        unset($_SESSION["scnic"]);
                                        unset($_SESSION["sname"]);
                                        unset($_SESSION["semail"]);
                                        unset($_SESSION["sgender"]);
                                        unset($_SESSION["sphone"]);
                                        unset($_SESSION["sadress"]);
                                        unset($_SESSION["scity"]);
                                        unset($_SESSION["sdate"]);
                                        unset($_SESSION["sfather"]);
                                        unset($_SESSION["sc1"]);
                                        unset($_SESSION["sc2"]);
                                        unset($_SESSION["sc3"]);
                                        unset($_SESSION["sc4"]);
                                        unset($_SESSION["sc5"]);
                                        unset($_SESSION["sc6"]);
                                     }
                                        $_SESSION["scnic"]=0;
                                        $_SESSION["semail"]=0;
                                        $_SESSION["sname"]=0;
                                        $_SESSION["sgender"]=0;
                                        $_SESSION["sphone"]=0;
                                        $_SESSION["sadress"]=0;
                                        $_SESSION["sdate"]=0;
                                        $_SESSION["sfather"]=0;
                                        $_SESSION["scity"]=0;
                                        $_SESSION["sc1"]=0;
                                        $_SESSION["sc2"]=0;
                                        $_SESSION["sc3"]=0;
                                        $_SESSION["sc4"]=0;
                                        $_SESSION["sc5"]=0;
                                        $_SESSION["sc6"]=0;
                                      ?>
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Announcements</h6>
                                    <div class="dropdown no-arrow">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $data;
                                        $ID;
                                        $con = new mysqli("localhost","root","","mainannouncements");
                                        $q = "select * from info";
                                        $rs = $con->query($q);
                                        
                                        while ($r = $rs->fetch_assoc())
                                        {
                                            $id=$r["ID"];
                                            $data=$r["data"];

                                        
                                            echo "<li>".$data."&nbsp &nbsp";
                                            echo "<a href='deleteadminannouncement.php?id=".$r["ID"]."'> Delete </a>";
                                            echo "&nbsp &nbsp";
                                        }
                                        if (empty($data))
                                        {
                                                echo "No Notification";
                                        }
                                        $con->close(); 
                                    ?>
                                    <div class="chart-pie pt-4 pb-2">
                                        <form action="uploadannounce.php" method="POST">
                                            <div class="form-group">
                                              <br>
                                              <br>
                                              <textarea class="form-control" name="textarea" rows="3" placeholder="add new Announcement"></textarea>
                                              
                                              <button type="submit" class="btn btn-primary">Post</button>
                                            </div>
                                        </form>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <!-- <div class="card-header py-3"> -->
                                    <!-- <h6 class="m-0 font-weight-bold text-primary">Projects</h6> -->
                                </div>
                               <!--  <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo "90%" ?>"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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
                    <a class="btn btn-primary" href="admin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>