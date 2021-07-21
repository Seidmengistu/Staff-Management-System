<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
    header('location:../login.php');
    
}  
include "../includes/homeMiddleware.php";

    isStore();
    
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SMS</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../includes/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../includes/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
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
                        <a href="../logout.php" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            <span class="float-right text-muted text-sm"></span>
                        </a>

                </li>
        </nav>

        <aside class="main-sidebar sidebar-light-primary elevation-1">
            <div class="sidebar">

                <a class="brand-link text-center" href="/"><img src="../includes/images/astu_logo.svg"
                        alt="AdminLTE Logo" class="img-circle" width="40%"></a>
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview ">
                        <li class="nav-item">
                            <p class="text-info nav-link">2020/2021 First Semester</p>
                        </li>
                        <a href="home1.php" class="nav-link active">
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
                                    Materials
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Materials/AddMaterials.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Materials</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Materials/ShowMaterials.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Materials</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Materials/Statistics.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Statistics </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <!-- <span class="badge badge-danger navbar-badge">New</span> -->
                                <p>
                                    Materials Borrow
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="BorrowMaterials/BorrowMaterials.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Borrow Materials</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="BorrowMaterials/BorrowedMaterials.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Borrowered Materials</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <!-- <span class="badge badge-danger navbar-badge">New</span> -->
                                <p>
                                    Materials Return
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="ReturnedMaterials/ReturnedMaterialsinfo.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Returned Materials</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="ReturnedMaterials/Statistics.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Statistics</p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item has-treeview ">
                            <a href="AcademicCalander/ShowAcademicCalander.php" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <!-- <span class="badge badge-danger navbar-badge">New</span> -->
                                <p>
                                    Academic Calender
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">


                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <h3 style="text-align:center">Welcome StoreKepper</h3>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div> <!-- Main Footer -->
    <?php
  include('include/footer.php');
  
  ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../includes/dist/js/adminlte.min.js"></script>
</body>

</html>
