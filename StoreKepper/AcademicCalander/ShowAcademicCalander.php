<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
    
    header('location:../../login.php');
} 
include "../../Auth/middleware.php";

    isStore();

?>
<!DOCTYPE html>
<html lang="en">

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
        <br>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">

                    <div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-calendar"></i>

                                            Upcoming Events
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
                                        <td><span class="italic"><?php echo htmlentities($result->Admission);?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                }
                }
                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
  include('../include/footer.php');
  ?>
    </div>
    <?=include "../include/script.php"?>;
</body>

</html>