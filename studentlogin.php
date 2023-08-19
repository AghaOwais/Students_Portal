<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$check=0;

		$con = new mysqli("localhost","root","","studentinformation");
		$q = "select * from info";
		$rs = $con->query($q);

		while ($r = $rs->fetch_assoc())
		{
			if ($email==$r["email"]&&$pass==$r["pass"]) {
				$check=1;
				$ID=$r["ID"];
				$name=$r["name"];
				$father=$r["father"];
				$gender=$r["gender"];
				$adress=$r["adress"];
				$city=$r["city"];
				$cnic=$r["cnic"];
				$phone=$r["phone"];
				$date=$r["date"];
				$announce=$r["announce"];
				$c1=$r["c1"];
				$c2=$r["c2"];
				$c3=$r["c3"];
				$c4=$r["c4"];
				$c5=$r["c5"];
				$c6=$r["c6"];
				break;
			}
			else
			{
				$check=-99;
			}
		}
		if ($check==1)
		{
			session_start();
			$_SESSION["ID"]=$ID;
			$_SESSION["emaill"]=$email;
			$_SESSION["name"]=$name;
			$_SESSION["gender"]=$gender;
			$_SESSION["phone"]=$phone;
			$_SESSION["pass"]=$pass;
			$_SESSION["announce"]=$announce;
			$_SESSION["father"]=$father;
			$_SESSION["date"]=$date;
			$_SESSION["cnic"]=$cnic;
			$_SESSION["adress"]=$adress;
			$_SESSION["city"]=$city;
			$_SESSION["c1"]=$c1;
			$_SESSION["c2"]=$c2;
			$_SESSION["c3"]=$c3;
			$_SESSION["c4"]=$c4;
			$_SESSION["c5"]=$c5;
			$_SESSION["c6"]=$c6;


			// ????????????????????????????????????????????




			header("Location:studentportal.php");

		}
		else
		{
			// echo '<script type ="text/JavaScript">';
			// echo 'alert(" invalid account details! ")';  
			// echo '</script>';  
			echo '<script>alert("invalid account details!"); location.replace(document.referrer);</script>';
		}

	?> 
	<!-- <form action="index.php">
		<button>go back</button>
	</form> -->
</body>
</html>
	

