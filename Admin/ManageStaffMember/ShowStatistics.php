<?php
session_start();
include "../../includes/config.php";
if(!isset($_SESSION['logged_in'])) {
    
    header('location:../../login.php');
} 
include "../../Auth/middleware.php";

    isAdmin();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Statistics</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../includes/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../includes/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../includes/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span class="badge badge-danger navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"></span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Profile
                            <span class="float-right text-muted text-sm"></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../../" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                            <span class="float-right text-muted text-sm"></span>
                        </a>

                </li>

        </nav>

        <aside class="main-sidebar sidebar-light-primary elevation-1">
            <a class="brand-link text-center" href=""><img src="../../includes/images/astu_logo.svg" alt="AdminLTE Logo"
                    class="img-circle" width="40%"></a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview">
                            <a href="../AdminDashboard.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Approvements
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Approvement.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Approvement</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href=ShowStatistics.php class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Statistics</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bullhorn"></i>

                                <p>
                                    Announcements
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../AnnounceMessages/createAnnouncement.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Announcements</p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <!-- <span class="badge badge-danger navbar-badge">New</span> -->
                                <p>
                                    Academic Calender
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../CreateAcadamicCalander/CreateAcadamicCalander.php" class="nav-link ">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Create Academic Calender</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../CreateAcadamicCalander/EditAcadamicCalander.php" class="nav-link ">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Show Academic Calender</p>
                                    </a>
                                </li>
                            </ul>


                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <br>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="nav-icon fas fa-history"></i>

                                    Approvement Statistics
                                </h3>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="content">

                                <div class="container-fluid">

                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div style="align:center" class="small-box bg-info">
                                                <div class="inner">
                                                    <?php
                                                    
                                                    $query=$dbh->prepare("SELECT id From Admin WHERE status=1 ORDER BY id");
                                                    $query->execute();
                                                    $row=$query->rowCount();
                                                    echo '<h1>'.$row.'</h1>';

                                                    ?>
                                                    <p>Total Approvements</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-bag"></i>
                                                </div>
                                                <a href="Approvement.php" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <?php
                                    
                                        $query=$dbh->prepare("SELECT id From Admin WHERE status=0 ORDER BY id");
                                         $query->execute();
                                        $row=$query->rowCount();
                                        echo '<h1>'.$row.'</h1>';

                                        ?>

                                                    <p>Pending States</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-person-add"></i>
                                                </div>
                                                <a href="Approvement.php" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <aside class="control-sidebar control-sidebar-dark">

                                </aside>

                            </div>
                            <?php require_once('include/notify.php')?>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php require_once('../include/footer.php')?>
    <script src="../../includes/plugins/jquery/jquery.min.js"></script>

    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="../../includes/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="../../includes/dist/js/adminlte.min.js"></script>

    <script src="../../includes/dist/js/demo.js"></script>
</body>

</html>