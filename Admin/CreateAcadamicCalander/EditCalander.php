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
    <title>SMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../includes/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../includes/plugins/summernote/summernote-bs4.css">
</head>
<?php include "../include/TopLayout.php";?>
<br>
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <span class="nav-icon fas fa-bullhorn"></span>
                                    Edit Acadamic Calander
                                </h3>

                            </div>
                            <?php
                                    $conn=mysqli_connect('localhost','root','','sms');
                                    
                                    if(isset($_POST['edit']))
                                    {
                                    $idt=$_POST['id'];
                                    $query="SELECT* FROM calander WHERE id='$idt'";
                                    $query_run=mysqli_query($conn,$query);


                                    foreach($query_run as $row)
                                    {
                                    ?>
                            <form method="post" action="include/EditAcadamicCalander.inc.php">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" required>Starting Date</label>
                                    <div class="col-sm-8">

                                        <input type="date" name="sdate" value="<?php echo $row['Sdate']?>"></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" required>End Date</label>
                                    <div class="col-sm-8">

                                        <input type="date" name="edate" value="<?php echo $row['Edate']?>"></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Activity</label>
                                    <div class="col-sm-8">

                                        <input class="form-control" rows="5" cols="25" name="activity" value="<?php echo $row['Activity']?>"required>

										</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Admission For</label>
                                    <div class="col-sm-8">

                                        <input class="form-control" rows="5" cols="25" name="admission" value="<?php echo $row['Admission']?>"required>

										</input>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name='id'
                                                value="<?php echo $row['id']?>">
                                <div style="text-align:center" class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4">

                                        <button type="submit" name="update" class="btn-primary btn">Update
                                            Calander</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            }
                        }?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php include ('../include/notify.php')?>
    <?php
  include('../include/footer.php');
  ?>
    <script src="../../includes/plugins/jquery/jquery.min.js"></script>
    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../includes/dist/js/adminlte.min.js"></script>
    <script src="../../includes/dist/js/demo.js"></script>
    <script src="../../includes/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
</body>

</html>