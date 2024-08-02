<?php

include('../connectionDB.php');

 
     $currentuser = $_POST['current_user'];  
     $subjectId = $_POST['subject_id'];  
     // echo  $courseid;

     $sql = "UPDATE  subjectdetails SET  subjectStudent='{$currentuser}' WHERE subjectId='$subjectId'";
     $query = mysqli_query($conn, $sql);
     if ($query==TRUE) {
          echo 1;
     } else {
          echo 0;
     }

     // echo $query;

 
 
      
 
?>