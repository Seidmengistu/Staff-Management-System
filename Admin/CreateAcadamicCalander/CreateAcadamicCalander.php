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
                                    Create Acadamic Calander
                                </h3>

                            </div>

                            <form method="post" action="include/CreateAcadamicCalander.inc.php">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" required>Starting Date</label>
                                    <div class="col-sm-8">

                                        <input type="date" name="sdate" value=""></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" required>End Date</label>
                                    <div class="col-sm-8">

                                        <input type="date" name="edate" value=""></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">activity</label>
                                    <div class="col-sm-8">

                                        <textarea class="form-control" rows="5" cols="50" name="activity" required>

										</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Admission For</label>
                                    <div class="col-sm-8">

                                        <input class="form-control" name="admission" required>

										</input>
                                    </div>
                                </div>

                                <div style="text-align:center" class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4">

                                        <button type="submit" name="announce" class="btn-primary btn">Announce
                                            Calander</button>
                                    </div>
                                </div>
                            </form>
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