<?php
 $data_Name = $_POST['ssname'];
//  $data_Phone = $_POST['d'];
 $data_Email = $_POST['semail'];
 $data_Password = $_POST['spwd']; //md5()
//  echo  $data_Name , $data_Phone,  $data_Email, $data_Password;

 $c = mysqli_connect("localhost", "root","","learn");
 $q = "insert into logindata(Username, Email, Password)value('$data_Name', ' $data_Email', ' $data_Password')";
 mysqli_query($c,$q);

 if (mysqli_affected_rows($c)>0){

    header("location:login.php?success");
//    echo "Successfully registered";
 }
 else 
 {echo "try Again";}
?> 