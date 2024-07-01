<?php
$sn=$_POST['snamee'];

$spwd=$_POST['pwdd'];

//echo($sn.$spwd);
$con=mysqli_connect("localhost","root","","learn");
$q="select * from adminlogin where Username='$sn' and Password='$spwd'";
$r=mysqli_query($con,$q);
if (mysqli_affected_rows($con)>0) {

    header("location:adminindex.php");
}
else{
	header("location:adminlogin.php?tryagain");
    // echo"try again";
}



?>