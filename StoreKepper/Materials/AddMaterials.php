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
    <link rel="stylesheet" href="../include/csss/style.css">
    
</head>

<body class="hold-transition sidebar-mini">
    <style>
        
    </style>
    <div class="wrapper">
        <?= include "../../load.php"?>
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

                                    Add Materials
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#stu">
                    Add Materials
                </button>


                <div class="modal fade" id="stu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"
                                    style="color:green;font-family:new times roman">
                                    Add Materials
                                </h5>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body" style="background-image:url('../../includes/images/bg-01.jpg')">

                                <form action='include/AddMaterials.inc.php' enctype="multipart/form-data" method='POST'>

                                    <?=include "include/AddMaterialForm.inc.php";?>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name='Add'>Add</button>
                                    </div>
                                </form>

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
    <script>
$(document).ready(function () {
    $(".searchh-close").on("click", function () {
        $(".main-searchh .form-control").animate({
            width: "0"
        }), setTimeout(function () {
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