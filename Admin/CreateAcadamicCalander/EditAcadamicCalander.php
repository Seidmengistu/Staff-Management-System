<?php
session_start();
// include "../../includes/config.php";
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
    <title>SMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../includes/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../includes/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"></span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Profile
                            <span class="float-right text-muted text-sm"></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../../logout.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            <span class="float-right text-muted text-sm"></span>
                        </a>

                </li>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-1">
            <div class="sidebar">
                <a class="brand-link text-center" href=""><img src="../../includes/images/astu_logo.svg"
                        alt="AdminLTE Logo" class="img-circle" width="40%"></a>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                                    <a href="../ManageStaffMember/Approvement.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Approvement</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../ManageStaffMember/ShowStatistics.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Statistics</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bullhorn"></i>
                                <!-- <span class="badge badge-danger navbar-badge">New</span> -->
                                <p>
                                    Announcements
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../AnnounceMessages/CreateAnnouncement.php" class="nav-link ">
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
                                    <a href="CreateAcadamicCalander.php" class="nav-link ">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Create Academic Calender</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="EditAcadamicCalander.php" class="nav-link ">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Edit Academic Calender</p>
                                    </a>
                                </li>
                            </ul>


                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside><br>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-calendar"></i>

                                        Edit Upcoming Events
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table  text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Activity</th>
                                    <th scope="col">Admission For</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
    
    include "../../includes/Config.php";
    $sql = "SELECT * from  calander Order BY sdate";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount()>0)
    {
      foreach ($results as $result)
       {
        
    ?>

                                <tr>
                                    <th><time datetime="1612742400000"
                                            title="2021-02-08T00:00:00+00:00"><?php echo htmlentities($result->Sdate);?></time>
                                        - <time datetime="1621551600000"
                                            title="2021-05-21T00:00:00+01:00"><?php echo htmlentities($result->Edate);?></time>
                                    </th>
                                    <td class="bold"><?php echo htmlentities($result->Activity);?></td>
                                    <td><span class="italic"><?php echo htmlentities($result->Admission);?></span></td>
                                    <form action="EditCalander.php" method='POST'>
                                        <td><button type='submit' class='btn btn-success' name='edit'>Edit</button></td>
                                        <input type='hidden' name='id' value="<?=$result->id?>">
                                    </form>
                                    <td>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#Delete"
                                            data-id="<?=$result->id?>">
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                                <?php
          }
          }
          ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:darkred">Warning</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 style="color:red">Are You Sure You Want To Delete?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    <form action="include/EditAcadamicCalander.inc.php" method="GET">
                        <button type='submit' class='btn btn-success' name='del'>Yes</button>
                        <input type='hidden' name='del' value="<?=$result->id?>" id="deleteId">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <?php
  include('../include/footer.php');
  ?>
    <script src="../../includes/js/sweetalert.min.js"></script>
    <?php require_once('../../includes/notify.php')?>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>
    <script src="../../includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../includes/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../includes/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="../../includes/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
</body>

</html>