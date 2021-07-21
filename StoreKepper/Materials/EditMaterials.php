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
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="nav-icon fas fa-copy"></i>

                                    Edit Materials
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="content" style="background-image:url('../statics/images/bg-01.jpg')">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <!-- style="background-image:url('../statics/images/bg-01.jpg') -->
                                    <div class="card-body">
                                        <?php
                                    $conn=mysqli_connect('localhost','root','','sms');
                                    
                                    if(isset($_POST['edit']))
                                    {
                                    $idt=$_POST['id'];
                                    $query="SELECT* FROM materials WHERE id='$idt'";
                                    $query_run=mysqli_query($conn,$query);


                                    foreach($query_run as $row)
                                    {
                                    ?>

                                        <form action='include/EditMaterials.inc.php' method='POST'>
                                        <div class="mb-3">
                                                <label class="form-label">Department</label>
                                                <input class="form-control" value="<?php echo $row['department']?>"
                                                    name='department'>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Material Name</label>
                                                <input class="form-control" value="<?php echo $row['Mname']?>"
                                                    name='MaterialName'>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Serial Number</label>
                                                <input class="form-control" value="<?php echo $row['Mserial']?>"
                                                    name='SerialNumber'>

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Quantity</label>
                                                <input vtype="text" class="form-control"
                                                    value="<?php echo $row['Quantity']?>" name='Quantity'>

                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Condition</label>
                                                <input class="form-control" name='Condition'
                                                    value="<?php echo $row['Cond']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Shelf Number</label>
                                                <input class="form-control" name='ShelfNumber'
                                                    value="<?php echo $row['Shelfnumber']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Store Number</label>
                                                <input class="form-control" name='StoreNumber'
                                                    value="<?php echo $row['Storenumber']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date</label>
                                                <input class="form-control" name='Date'
                                                    value="<?php echo $row['Date']?>">
                                            </div>

                                            <input type="hidden" class="form-control" name='id'
                                                value="<?php echo $row['id']?>">

                                            <a href='ShowMaterials.php' class='btn btn-danger'>Cancel</a>
                                            <button name='update' class='btn btn-primary'>Update</button>
                                        </form>
                                        <?php
 
                                        }
                                        }?>
                                    </div>
                                </div>
                                <div class="card card-primary card-outline">
                                </div>
                            </div>

                        </div>
                    </div>
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