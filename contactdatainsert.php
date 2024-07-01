<?php
 $data_Name = $_POST['SName'];
 $data_Email = $_POST['SEmail'];
 $data_Subject= $_POST['SSubject'];
 $data_Message= $_POST['SMessage'];
//  echo  $data_Name , $data_Phone,  $data_Email, $data_Password;

 $c = mysqli_connect("localhost", "root","","learn");
 $q = "insert into contactdata(Name, Email, Subject, Mesage) value (' $data_Name', '$data_Email',  '$data_Subject', ' $data_Message')";
 mysqli_query($c,$q);

 if (mysqli_affected_rows($c)>0){

    header("location:contact.php?success");
//    echo "Successfully registered";
 }
 else 
 {echo "try Again";}
?>