<?php session_start();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sign Up</title>

    <link rel="stylesheet" href="includes/Auth/css/style.css">
    <link rel="stylesheet" href="includes/dist/css/adminlte.min.css">
</head>
<style>
.button-container-div {
    text-align: center;

}

.ss {
    text-align: center;
}
</style>




<body>


    <section class="id nx rillustration-section-i">
        <div class="scontainero">
            <div class="rv s_">

            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 style="text-align: center" class="">Sign Up</h3>
                </div>


                <form action="Auth/signup.inc.php" method="POST" id="quickForm">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="vv">User Name</label>
                            <input name="username" required="" class="form-control" placeholder="Username" >
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" required="" name="password" class="form-control" id="exampleInputPassword1" required=""
                                placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="department">Department</label>
                            <select name="department" required="" class="form-control"  >
                                <option>Select Department</option>
                                <option value="Computer Science & Engineering">1.Computer
                                    Science & Engineering</option>
                                <option value="Electronics & commpunication engineering">
                                    2.Electronics & communication Engineering</option>
                                <option value="Elctrical power & control engineering">
                                    3.Elctrical power & control Engineering</option>
                                <option value="Mechanical Engineering">4.Mechanical Engineering
                                </option>
                                <option value="MaterialsEnginnering">5.MaterialsEnginnering
                                </option>
                                <option value="Chemical Engineering">6.Chemical Engineering
                                </option>
                                <option value="Architecture Engineering">7.Architecture
                                    Engineering</option>
                                <option value="Civil Engineering">8.Civil Engineering</option>
                                <option value="Applied Science">9.Applied Science</option>
                            </select>
                        </div>

                        <div class="og" >
                            <label for="occupation">Occupation</label>
                            <select name="occupation" class="form-control" required="" >
                                <option>Select Occupation</option>
                                <option value="Lecture">1.Lecture
                                </option>
                                <option value="Store Kepper">
                                    2.Store Kepper</option>
                                <option value="Other">
                                    3.Other</option>
                                    

                            </select>
                        </div>

                        <div class="og"> <label for="role">Role</label>

                            <select name="role" class="form-control" required="">
                                <option value="">Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Store">Store</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" required="" class="form-control" placeholder="date">
                        </div>
                    </div>

                    <div class="ss"><button type="submit" name="signup" class="btn btn-primary">Sign
                            up</button>
                    </div>

                    
                    <div class="button-container-div">

                        <label>Have an Account<a href="login.php"> Login</a>.</label>

                    </div>
                </form>
            </div>

        </div>
    </section>
    <script src="includes/dist/js/adminlte.js"></script>
    <script src="includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="includes/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="includes/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="includes/dist/js/demo.js"></script>
    <?php require_once('includes/notify.php')?>
    <script type="text/javascript">


    $(document).ready(function() {
        $.validator.setDefaults({
            submitHandler: function() {

                include("Auth/signup.inc.php");
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    </script>
    <script>
    < /html>