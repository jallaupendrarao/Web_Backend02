<?php



$id=$_REQUEST['q'];
$v=mysqli_connect("localhost","root","","learn");
$s="delete from contactdata where Name='$id'";
$r=mysqli_query($v,$s);


if(mysqli_affected_rows($v)>0){
    header("location:adminindex.php");
}
else{
    echo "try again";
}

?>