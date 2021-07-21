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

        <div class="content-wrapper">
            <div class="content-header">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="nav-icon fas fa-copy"></i>
                                        Borrow Materials
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content" style="align:center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">

                                        <div class="card-body">

                                            <form method="Post"
                                                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <label style="font-family:georgia;color:green">Search
                                                    Material</label><br>
                                                <input class="col-md-8" type="text" class="form-control" name="msearch"
                                                    name="msearch" placeholder="Enter Material Serial Number">
                                                <button type="submit" name='search'
                                                    class="btn btn-primary">Serach</button><br>
                                                <br>

                                                <?php
                                                    if(isset($_POST['search']))
                                                {
                                                    $Mserial=$_POST['msearch'];
                                                    $conn=mysqli_connect('localhost','root','','sms');
                                                    $sql ="SELECT * FROM materials   WHERE Mserial=:Mserial LIMIT 1 ";
                                                    $query= $dbh -> prepare($sql);
                                                    $query-> bindParam(':Mserial', $Mserial, PDO::PARAM_STR);
                                                    $query-> execute();
                                                    $results = $query->fetchAll(PDO::FETCH_ASSOC);
                                                    $cc=$query->rowCount()==0;
                                                    
                                                    if ($cc==TRUE) {
                                                        
                                                        echo "<center><label class = 'text-danger'>Material With This Serial Number is Not Available!</label></center>";
                                                    }
                                                   
                                             
                                                    foreach ($results as $res) 
                                               {
                                                ?>
                                            </form>
                                            <form action="include/BorrowMaterials.inc.php" method="POST">
                                            <label style="font-family:georgia;color:blue">Search
                                                    Borrower</label><br>
                                            <select class="col-md-8" name="borrower" id="borrower" required>
                                            
                                                <option required class="col-md-8" selected="selected"
                                                    disabled="disabled">
                                                    Select
                                                    Borrower Name</option>
                                                <option required>
                                                    <?php
                                                     $sql = $conn->query("SELECT * FROM `admin` WHERE status=1 ORDER BY `UserName`") or die(mysqli_error());
                                                     while($row = $sql->fetch_array()){
                                                 ?>
                                                <option value="<?php echo $row['UserName']?>">
                                                    <?php echo $row['UserName']?></option>
                                                <?php
                                                     }
                                                    ?>
                                            </select>
                                            <br>
                                            <div class="form-group">
                                                    <label for="quantity">Quantity</label>
                                                    <input   class="form-control" 
                                                         name="quantity" placeholder="Please Enter Quantity">
                                                </div>

                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input  type="date"  class="form-control" 
                                                       name="date" placeholder="Please Enter The Date">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="department">Department</label>
                                                    <input    class="form-control" 
                                                        value="<?= $res['department']?>"   name="department">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Material Name</label>
                                                <input class="form-control" value="<?php echo $res['Mname']?>"
                                                    name='MaterialName'>
                                            </div>


                                                <div class="form-group">
                                                    <label for="materials serial number">Materials Serial
                                                        Number</label>
                                                    <input  class="form-control" name="materialsserialnumber"
                                                        value="<?= $res['Mserial']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="condition">Condition</label>
                                                    <input  class="form-control" name="condition"
                                                        value="<?= $res['Cond']?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="shelfnumber">Store Number</label>
                                                    <input class="form-control" name="storenumber"
                                                        value="<?= $res['Storenumber']?>">
                                                </div>

                                                <div style="text-align:center" class="form-group">
                                                    <button name="save_borrow" class="btn btn-primary"><span
                                                            class="glyphicon glyphicon-thumbs-up"></span>
                                                        Borrow</button>
                                                </div>

                                            </form>
                                            <?php }} ?>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php include('../include/notify.php');?>
    <script src="../include/js/chosen.jquery.min.js">
    </script>
    <script src="../include/js/jquery.js"></script>
    <?php include('../include/footer.php');?>
    </div>
    <?= include "../include/script.php"?>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#borrower").chosen({
                width: "auto"
            });
        })
    </script>
</body>

</html>