<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    include '../fungsi.php';
    error_reporting(0); ini_set('display_errors', 0);
    ?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Admin Area</title>

</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container opacity-75">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header ">
                                    <h3 class="text-center font-weight-light my-4">Admin Login</h3>
                                </div>
                                <div class="card-body ">
                                    <form class="user oppacity-100" method="POST" >
                                        <div class=" form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control py-4" id="username" type="text" name="uname" placeholder=" Enter username" />
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4 mb-1 " id="password" type="password" name="pword" placeholder=" Enter password" />
                                            </div>
                                            <div class="small form-group">
                                                <input type="checkbox" id="show" class="small from-checkbox mt-0 " onclick="showpass()">
                                                <label for="show">Show Password</label>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                                <button type="submit" class="btn btn-primary center-block mx-auto" name="login">
                                                    Login
                                                </button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div></div></div></div>


<?php
$uname = $_POST['uname']; $pword=$_POST['pword'];
if(isset($_POST['login'])){
    if(($uname == 'admin')&&($pword=='admin')){
        $_SESSION['admin']='true';
        header('Location:dashboard.php');
    }
}

?>


                    <script src="js/jquery-3.5.1.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.js"></script>
                    <script src="js/scripts.js"></script>

</body>

<style>
    body {
        background-image: url("bg.jpg");
        background-repeat: no-repeat;
  
    }
</style>
<script>
    function showpass() {
        var show = document.getElementById("show");
        var pass = document.getElementById("password");
        if (show.checked == true) {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }
</script>

</html>