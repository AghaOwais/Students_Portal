<?php
	session_start();
    if (isset($_SESSION["emaill"])) 
    {
    	$ID=$_SESSION["ID"];   
        $pass=$_SESSION["pass"];


    	$cId = $_POST["cId"];
		$cname = $_POST["cname"];
		$ccid = $_POST["ccid"];
		$cre = $_POST["cre"];
		$cpass = $_POST["cpass"];


		if ($pass==$cpass)
		{
			if ($ID==$cId)
			{
				if(preg_match("/^[1-6]{1}$/", $ccid)) 
	            {
	             	$con = new mysqli("localhost","root","","coursedropdata"); 

                    $q = "insert into info(sid,cid,reason) values('".$cId."','".$ccid."','".$cre."')";
                    if($con->query($q)==TRUE)
                    {
                                                 // echo '<script>alert("Successfully Posted"); location.replace(document.referrer);</script>';
                       	header("Location:studentportal.php");

                    }
                    else
                    {
                        echo $con->error;
                    }
                                        // }
                                        // else
                                        // {

                                        //        echo '<script>alert("you are already loggedout"); location.replace(document.referrer);</script>'; 
                                        // }
                                            
                    $con->close();
	            }
	            else
	            {
	            	echo '<script>alert("intvalid Course ID"); location.replace(document.referrer);</script>';
	            }
			}
			else
			{
				echo '<script>alert("intvalid student ID"); location.replace(document.referrer);</script>';
			}
		}
		else
		{
			echo '<script>alert("no Entries found!"); location.replace(document.referrer);</script>';
		}
    }
	
  ?>