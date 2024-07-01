<?php
$sn=$_POST['sname'];

$spwd=$_POST['pwd'];

//echo($sn.$spwd);
$con=mysqli_connect("localhost","root","","learn");
$q="select * from logindata where Username='$sn' and Password='$spwd'";
$r=mysqli_query($con,$q);
if (mysqli_affected_rows($con)>0) {

    header("location:mainindex.php");
}
else{
	header("location:login.php?tryagain");
    // echo"try again";
}



?>