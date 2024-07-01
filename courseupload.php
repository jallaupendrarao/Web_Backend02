<!-- ak image mei name , size, type aur path - (tmp_name) ratha -->

<?php 
$sname = $_FILES['hi']['name'];
$pname = $_FILES['hi']['name'];

$name = $_FILES['hi']['name'];
$size = $_FILES['hi']['size'];
$type = $_FILES['hi']['type'];
$path = $_FILES['hi']['tmp_name'];
$error = $_FILES['hi']['error'];

//  echo "file name = " .$name, " <br> file size = ".$size, " <br> file type = " .$type, " <br> file path = " .$path, "<br> file error = " .$error ;

if(($type=='image/jpg')||($type=='image/jpeg')||($type=='image/png') ||($type=='application/pdf') ||($type=='image/png') ||($type=='ihgjgu/txt')&&($size<200000)){


   
    if($error>0){
        echo "error";
    }
    else{
        echo "check kar upload ho gaya hai ";
     move_uploaded_file($path, "image22/".$name);
     move_uploaded_file($path, "coursedata/".$sname);
     move_uploaded_file($path, "courseamount/".$pname);




     $a = mysqli_connect("localhost","root","","learn");
     $q= "insert into courseupload(FileName,Subject,Amount)value('$name', '$sname' , '$pname')";
    //  $j= "insert into courseupload(Subject)value('$name')";
    //  $l= "insert into courseupload(Amount)value('$name')";

     mysqli_query($a,$q);



    }
}

?>