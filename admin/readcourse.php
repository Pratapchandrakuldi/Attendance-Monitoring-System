<?php

include('../connectionDB.php');

$coursename=$_POST['course_name'];
 
$sql="INSERT INTO `course` (`courseName`) VALUES ('$coursename')";
     $query=mysqli_query($conn,$sql);
     if($query){
          echo 1;
     }else{
      echo  0;
     }




 

            
 ?>