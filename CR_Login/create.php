<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Civil Registry-Create Registrar Account</title>
	<meta charset="UTF-8">
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="includes/signup.inc.php" method= "POST">
                <span class="login100-form-title p-b-20	 p-t-20">
						The Civil Registry 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username">
						<input class="input100" type="text" name="uid" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email">
						<input class="input100" type="text" name="email" placeholder="Institutional Email Address">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Tel No">
						<input class="input100" type="text" name="tel" placeholder="Telephone No">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="reg" placeholder="Region">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="div" placeholder="Division">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="sub" placeholder="Subdivision">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>



					
                    

					<div class="container-login100-form-btn">
						<button type ="submit" name="submit" method="POST" class="login100-form-btn">
                        <b>Create Account</b>
						</button>
					</div>
			
                    <div class="container-login100-form-btn">
                    
						<button class="login100-form-btn">
                        
						<b><a href="index.php">Login</a></b>
						</button>
					</div>
					
					

				
					
				</div>
				</form>
                    
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
	<script src="js/main.js"></script>

</body>
</html>