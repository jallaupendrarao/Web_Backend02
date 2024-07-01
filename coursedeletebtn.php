<?php



$id=$_REQUEST['q'];
$v=mysqli_connect("localhost","root","","learn");
$s="delete from courseupload where FileName='$id'";
$r=mysqli_query($v,$s);


if(mysqli_affected_rows($v)>0){
    header("location:courseupdate&delete.php");
}
else{
    echo "try again";
}

?>