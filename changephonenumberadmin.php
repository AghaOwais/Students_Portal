<?php
     session_start();
    if (isset($_SESSION["ID"])) 
    {

        // old pass data
        $pass=$_SESSION["pass"];
        $phone=$_SESSION["phone"];
        $id=$_SESSION["ID"];


        // conform data
        $conformpass = $_POST["conformpass"];
        $newnumber = $_POST["newnumber"];


        if ($pass==$conformpass)
        {
            
            if(preg_match("/^[+]{1}[0-9]{1}[0-9]{1}-[0-9]{10}$/", $newnumber)) 
            {
                if($phone==$newnumber)
                {
                     echo '<script>alert("cant update same number again!"); location.replace(document.referrer);</script>';
                }
                else
                {
                    $con = new mysqli("localhost","root","","admindetails");
                    $q = "update details set phone='".$newnumber."' where id= ".$id;
                    if($con->query($q)==TRUE)
                    {
                        $_SESSION["phone"]=$newnumber;
                        echo '<script>alert("Phone Number changed sucessfully"); location.replace(document.referrer);</script>';
                    }
                     $con->close();
                    
                }
                
            }
            else
            {
                 echo '<script>alert("it must follow the format +92-1234567890"); location.replace(document.referrer);</script>';
            }
        }
        else
        {
             echo '<script>alert("intvalid password"); location.replace(document.referrer);</script>';
        }

    }
    else
    {
        echo '<script>alert("you are already loggedout"); location.replace(document.referrer);</script>';
    }
?>
