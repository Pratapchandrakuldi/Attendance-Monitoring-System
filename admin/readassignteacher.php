<?php

include('../connectionDB.php');

 
     $assignteacherid = $_POST['assignteacherid'];
     $assigncourse = $_POST['assigncourse'];
     $assignyear = $_POST['assignyear'];
     $assignsemester = $_POST['assignsemester']; 
     $assignsubject = $_POST['assignsubject']; 
     // echo  $courseid;

     $sql = "INSERT INTO `assignsubject` (`assignTeacher`,`assignCourse`,`assignYear`,`assignSemester`,`assignSubject`) VALUES ('$assignteacherid','$assigncourse','$assignyear','$assignsemester','$assignsubject')";
     $query = mysqli_query($conn, $sql);
     if ($query==TRUE) {
          echo 1;
     } else {
          echo 0;
     }

     // echo $query;

 
 
      
 
?>