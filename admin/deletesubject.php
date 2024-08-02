<?php
   include ('../connectionDB.php');

       $delete_subid=$_POST['deletesubid'];
     $sql="DELETE FROM `subjectdetails` WHERE `subjectId` = {$delete_subid}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>