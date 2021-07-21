<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
    
    header('location:../login.php');
} 
include "../includes/homeMiddleware.php";

    isStaff();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SMS</title>

    
    <link rel="stylesheet" href="../includes/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../includes/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="include/css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <?php include "../load.php";?>
    <?php include "include/Layout/nav.inc.home1.php";?>
    <?php include "include/Layout/sidebar.inc.php";?>

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

                    <h3 style="text-align:center">Welcome Staff Member</h3>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <?php
  include('include/footer.php');
  ?>
    </div>
    <?= include "include/home1script.php";?>
    <script>
  $(document).ready(function () {
    $(".searchh-close").on("click", function () {
       setTimeout(function () {
            $(".main-searchh").removeClass("open")
        }, )
    })
}), $(document).ready(function () {
    
        
    }), $(".theme-loader").fadeOut("slow", function () {
        $(this).remove()
    })

    </script>
</body>

</html>