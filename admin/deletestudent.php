<?php
   include ('../connectionDB.php');

       $studentID=$_POST['studentID'];
     $sql="DELETE FROM `studentdetails` WHERE `studentId` = {$studentID}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>