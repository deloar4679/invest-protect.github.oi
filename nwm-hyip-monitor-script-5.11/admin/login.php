<?php
include ("db.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>NWM Hyip Monitor Admin Login</title>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				
				<form class="login100-form validate-form" method="post" action="index.php">
				    <img src="images/icons/logo.png" alt="New Web Maker">
					<span class="login100-form-title p-b-55">
					<br>	Admin Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

			
					
					<div class="container-login100-form-btn p-t-25">
					<input class="login100-form-btn" type="submit" name="submit" value="Login">
					</div>

				

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Forgot Password?
						</span>

						<a class="txt1 bo1 hov1" href="#">
							Reset Now							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>



<?php


if (isset($_POST['submit'])){
    

        //If the user has checked the Captcha box
       $user = $_POST['username'];
     $pass1 = $_POST['pass'];
     $pass = md5($pass1);
     
$que ="select * from admin where username='$user' AND password='$pass'"; 

 $run=mysqli_query($con,$que);
 $num=mysqli_num_rows($run);

 
 if ($num==1){
     $_SESSION['username']=$user;
     
     echo "<script>window.open('/admin','_self')</script>"; exit();
 }
 
 else{
     
     echo "<script>alert('Wrong Data')</script>"; exit(); 
 }
	
    } 



?>