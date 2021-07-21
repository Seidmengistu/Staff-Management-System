

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
                        <a href="../../logout.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                            <span class="float-right text-muted text-sm"></span>
                        </a>

                </li>

        </nav>

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
                                        <p>Edit Academic Calender</p>
                                    </a>
                                </li>
                            </ul>


                        </li>
                    </ul>
                </nav>
            </div>
        </aside>