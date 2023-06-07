<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GTF Login</title>
   
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="login_register.css">
<!--===============================================================================================-->
</head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title"style="background-image: url(image/1.jpg);">
                        <span class="login100-form-title-1">
                            Green Captan Login
                        </span>
                    </div>
    
                    <form method="post" class="login100-form validate-form">
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="email" name="username" placeholder="Enter username">
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="pass" placeholder="Enter password">
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="flex-sb-m w-full p-b-30">
                        
                            <div>
                                <a href="register.php" class="txt1">
                                    Not Registered?
                                </a>
                            </div>
                        </div>
    
                        <div class="container-loginbtn">
                            <button name="login" type="submit" class="loginbtn">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
if(isset($_POST["login"])){
    include"database.php";
    $username=$_POST["username"];
    $password=$_POST["pass"];
   
    $sql="SELECT * FROM tbl_gtf_member WHERE Email='$username' and  pwd= '$password'" ;

    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);
    if($count  == 1)
    {
       echo "<script>window.location.href = 'http://localhost/green/greencaptan/dashboard.php'</script>";
        exit();
    }
    else{
     echo '<script>
        
      swal({
        title: "Error!",
        text: "User registration failed",
        icon: "warning",
        button: "Ok",
      });
      
      
      
      </script>';
    }
   
}
?>
        <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="main.js"></script>
        
    </body>
</html>