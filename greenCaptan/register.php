<!DOCTYPE html>
<html lang="en">
<head>
	<title>GTF Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="login_register.css">
    <script src="register.js"></script>
<!--===============================================================================================-->
</head>
    <body>
          <form   id="register-form" class="register-form" role="form" method="post">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url(image/1.jpg);">
                        <span class="login100-form-title-1">
                            Green Captan Registration
                        </span>
                        </div><br>

                  
                      
                    <div class = "name"> First Name</div>
                    <input type ="text" name ="fname" placeholder="Enter First Name"><br>
                    
                    <div class = "name"> Last Name</div>
                    <input type ="text" name ="lname" placeholder="Enter Last Name"><br>
                   
                    <div class = "name">Email</div>
                    <input type ="email" name ="email" placeholder="Enter Email"><br>
                    
                    <div class = "name">Phone number</div>
                    <input type ="text" name ="phone" placeholder="Enter Phone number"><br>
                   
                    <div class = "name">Password</div>
                    <input type ="password" name ="password" placeholder="Enter password"><br>
                    <div class = "name"> Confirm Password</div>
                    
                    <input type ="password" name ="cpassword" placeholder="Confirm password"><br><br>
                    <div class="container-loginbtn">
                        <button type="submit"  name="register" class="loginbtn">
                            Register
                        </button><br><br>

                       
                        <button type="submit"name="cansel"class="loginbtn">
                            Cansel
                        </button>

                </div>
           
            </div>
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
    
       


        <?php
include 'database.php';
error_reporting(E_ERROR | E_PARSE);


    $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $pass = mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql = "INSERT INTO tbl_gtf_member(f_name,l_name,Email,phone_number,pwd)VALUES('$firstname','$lastname','$email','$phone','$pass')";
    
    if(isset($_POST['register']))
    {
        if (strlen($_POST['fname']) < 1) {
            echo '<script>alert("Please add firstname!");</script>';
            exit;
        }
        if (strlen($_POST['lname']) < 1) {
            echo '<script>alert("Please add a lastname!");</script>';
            exit;
        }
        if (strlen($_POST['phone']) < 10) {
            echo '<script>alert("Please add a valid Phone number");</script>';
            exit;
        }
        if (strlen($_POST['email']) < 1) {
            echo '<script>alert("Please add email");</script>';
            exit;
        }
        if (strlen($_POST['password']) < 1) {
            echo '<script>alert("Please add password");</script>';
            exit;
        }
        else{
       
      if(mysqli_query($conn,$sql))
      {
        echo '<script>
        
        swal({
          title: "Good job!",
          text: "User registration success",
          icon: "success",
          button: "Ok",
        });
        
        
        
        </script>';
      }
      else  echo '<script>
        
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
            
            </body>
            </html>
