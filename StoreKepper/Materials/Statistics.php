<?php
session_start();
include "../../includes/config.php";
if(!isset($_SESSION['logged_in'])) {
    
    header('location:../../login.php');
} 
include "../../Auth/middleware.php";

    isStore();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMS</title>
    <link rel="stylesheet" href="../../includes/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= include "../include/Layout/navbar.php"?>
        <?= include "../include/Layout/Layout.inc.php"?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="nav-icon fas fa-copy"></i>
                                    Statistics
                                </h3>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="content">

                    <div class="container-fluid">
                        
                        <div class="row">
                            <div style="align:center" class="small-box bg-success">
                                <div class="inner">
                                    <?php
                                        
                                        $query=$dbh->prepare("SELECT id From Materials ORDER BY id");
                                         $query->execute();
                                        $row=$query->rowCount();
                                        echo '<h1>'.$row.'</h1>';

                                        ?>
                                    <p>Total Materials Added </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="ShowMaterials.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
        </div>
    </div>
    <?php
  include('../include/footer.php');
  include('../include/notify.php');
  ?>
    </div>
    <?=include "../include/script.php"?>;
</body>

</html>