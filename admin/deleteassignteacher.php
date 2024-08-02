<?php
   include ('../connectionDB.php');

       $assignteacherID=$_POST['assignteacherID'];
     $sql="DELETE FROM `assignsubject` WHERE `assignsubjectId` = {$assignteacherID}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>