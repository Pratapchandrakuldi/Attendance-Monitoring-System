<?php
   include ('../connectionDB.php');

       $courseid=$_POST['deleteid'];
     $sql="DELETE FROM `course` WHERE `courseId` = {$courseid}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>