<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">



</head>
<body>
<form  action="verifyforadmin.php" method="POST">
	<div class="box-form">
	<div class="left">
		<div class="overlay">
			<h1>admin portal</h1>
		</div>
	</div>
	
		
		<div class="right">
		<h5>Login</h5>
		<p>create account for admin <a href="adminsignup.php"style="text-decoration: none">signUp</a> only admin can enroll students</p>
		<p></p>
		<div class="inputs">
			<input type="text" name="email" placeholder="email">
			<br>
			<input type="password" name="pass" placeholder="password">
		</div>
			
			<br><br>
			
		<div>
				<!-- Angular -->
			<!-- <a href="#" style="text-decoration: none">forget password?</a> -->
			<!-- <p>forget password?</p> -->
		</div>
			<br>

			<button onclick="input">Login</button>
	</div>
	
</div>
</form>

<!-- partial -->
  
</body>
</html>
