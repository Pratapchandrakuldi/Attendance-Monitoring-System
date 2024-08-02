<?php

include('../connectionDB.php');

 
     $studentfirst = $_POST['studentfirst'];
     $studentlast = $_POST['studentlast'];
     $studentroll = $_POST['studentroll'];
     $studentmail = $_POST['studentmail']; 
     $studentcourse = $_POST['studentcourse']; 
     $studentyear = $_POST['studentyear']; 
     $studentsemester = $_POST['studentsemester']; 
     // echo  $courseid;

     $sql = "INSERT INTO `studentdetails` (`studentFirstName`,`studentLastName`,`studentRollNo`,`studentMailId`,`studentPassword`,`studentCourse`,`studentYear`,`studentSemester`) 
     VALUES ('$studentfirst','$studentlast','$studentroll','$studentmail','$studentroll','$studentcourse','$studentyear','$studentsemester')";
     $query = mysqli_query($conn, $sql);
     if ($query==TRUE) {
          echo 1;
     } else {
          echo 0;
     }

     // echo $query;

 
 
      
 
?>