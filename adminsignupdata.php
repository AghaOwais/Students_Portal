<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$cnic = $_POST["cnic"];
	$pass = $_POST["pass"];

	$con = new mysqli("localhost","root","","admindetails"); 

	 $q = "insert into details(name,email,cnic,pass) values('".$name."','".$email."','".$cnic."','".$pass."')";
	if($con->query($q)==TRUE)
	{
		header("Location:index.php");

	}else{
		echo $con->error;
	}
		$con->close();
?>
