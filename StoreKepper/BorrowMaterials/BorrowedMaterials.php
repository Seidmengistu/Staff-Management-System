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
    <link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= include "../include/Layout/navbar.php"?>
        <?= include "../include/Layout/Layout.inc.php"?>
        
        <div class="content-wrapper">
            
            <div class="content-header">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="nav-icon fas fa-copy"></i>
                                        Borrowed List
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="background-image:url('images/slide2.jpg')">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Borrower Name</th>
                                    <th>Material Name</th>
                                    <th>Serial Number</th>
                                    <th>Quantity</th>
                                    <th>Condition</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                           
                                           $sql = "SELECT * from  BorrowedMaterials ";
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
                                    <td><?php echo htmlentities($result->UserName);?></td>
                                    <td><?php echo htmlentities($result->MaterialName);?></td>
                                    <td><?php echo htmlentities($result->SerialNumber);?></td>
                                    <td><?php echo htmlentities($result->Quantity);?></td>
                                    <td><?php echo htmlentities($result->Cond);?></td>
                                    <td><?php echo htmlentities($result->Date);?></td>
                                  
                                    <td>

                                        <?php if($result->Status=='Borrowed')
                                          {?>
                                        <button class="btn btn-warning" data-toggle="modal" data-target="#Borrowed"
                                            data-id="<?=$result->id?>">
                                            Borrowed</a>
                                    </td>
                                    <?php } else {?>
                                    <button class="btn btn-success" data-toggle="modal" data-target="#Returned"
                                        data-id="<?=$result->id?>">Returned</a>

                                        <?php } ?>
                                        <td>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#abc"
                                                data-id="<?=$result->id?>">
                                                Delete</a>
                                        </td>
                                        </td>
                                </tr>
                                <?php $cnt=$cnt+1; }} ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="abc" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete
                                        Warning
                                    </h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>Are You Sure To Delete it?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>

                                    <form action="include/BorrowedMaterials.inc.php" method="GET">
                                        <button type='submit' class='btn btn-success' name='del'>Yes</button>
                                        <input type='hidden' name='del' value="" id="deleteId">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="Borrowed" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Return Warning
                                    </h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>Are You Sure To Return it?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                    <form action="include/BorrowedMaterials.inc.php" method="GET">
                                        <button type='submit' class='btn btn-success' name='Borrowed'>Yes</button>
                                        <input type='hidden' name='Borrowed' value="" id="BorrowedId">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="Returned" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Borrow Warning
                                    </h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Are You Sure!To Put it In Borrowed State?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                    <form action="include/BorrowedMaterials.inc.php" method="GET">
                                        <button type='submit' class='btn btn-success' name='Returned'>Yes</button>
                                        <input type='hidden' name='Returned' value="" id="ReturnedId">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
   
    </div>
    <?php include('../include/notify.php');?>
    <?php
  include('../include/footer.php');
  ?>
    </div>

    <?=include "../include/script.php"?>;
    <script>
    $('#abc').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        document.getElementById('deleteId').value = button.data('id');
    });

    $('#Borrowed').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        document.getElementById('BorrowedId').value = button.data('id');
    });

    $('#Returned').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        document.getElementById('ReturnedId').value = button.data('id');
    });

   
</script>

</html>