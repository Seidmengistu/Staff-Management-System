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
    <link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= include "../include/Layout/navbar.php"?>
        <?= include "../include/Layout/Layout.inc.php"?>
        <br>
        <div class="content-wrapper">
            <div class="content">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="nav-icon fas fa-copy"></i>
                                        Materials List
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Material Name</th>
                                    <th>Serial Number</th>
                                    <th>Quantity</th>
                                    <th>Condition</th>
                                    <th>ShelfNumber</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                           
                                            $sql = "SELECT * from  materials ";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {			
                                            
                                
                                        ?>
                                <tr>
                                    <td><?php echo htmlentities($cnt);?></td>
                                    <td><?php echo htmlentities($result->Mname);?></td>
                                    <td><?php echo htmlentities($result->Mserial);?></td>
                                    <td><?php echo htmlentities($result->Quantity);?></td>
                                    <td><?php echo htmlentities($result->Cond);?></td>
                                    <td><?php echo htmlentities($result->Shelfnumber);?></td>
                                    <form action="EditMaterials.php" method='POST'>
                                        <td><button type='submit' class='btn btn-success' name='edit'>Edit</button></td>
                                        <input type='hidden' name='id' value="<?=$result->id?>">
                                    </form>
                                    <td>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#abcd"
                                            data-id="<?=$result->id?>">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <?php $cnt=$cnt+1; }} ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="abcd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <form action="include/EditMaterials.inc.php" method="GET">
                        <button type='submit' class='btn btn-success' name='del'>Yes</button>
                        <input type='hidden' name='del' value="<?=$result->id?>" id="deleteId">
                    </form>

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