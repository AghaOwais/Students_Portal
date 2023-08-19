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
<form  action="studentlogin.php" method="POST">
	<div class="box-form">
	<div class="left">
		<div class="overlay">
			<h1>Student portal</h1>
		</div>
	</div>
	
		
		<div class="right">
		<h5>Login</h5>
		<p>Login as admin? <a href="admin.php"style="text-decoration: none">login</a> only admin can enroll students</p>
		<p></p>
		<div class="inputs">
			<input type="text" name="email" placeholder="email">
			<br>
			<input type="password" name="pass" placeholder="password">
		</div>
			
			<br><br>
			
		<div>
			<!-- <a href="#" style="text-decoration: none">forget password?</a> -->
		</div>
			<br>

			<button>Login</button>
	</div>
	
</div>
</form>
  
</body>
</html>
