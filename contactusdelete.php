<?php

	$con = new mysqli("localhost","root","","contactus");

	$q = "delete from info where id=".$_GET["requestID"];

	if($con->query($q)==TRUE)
	{
		header("Location:contactusadmin.php");

	}else
	{
		echo $con->error;
	
	}
	$con->close();
?>