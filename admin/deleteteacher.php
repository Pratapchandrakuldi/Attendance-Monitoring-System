<?php
   include ('../connectionDB.php');

       $teacherID=$_POST['teacherID'];
     $sql="DELETE FROM `teacherdetails` WHERE `teacherId` = {$teacherID}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>