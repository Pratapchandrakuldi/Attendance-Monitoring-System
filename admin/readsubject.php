<?php

include('../connectionDB.php');

if(isset($_POST['course_id'])){
     $courseid = $_POST['course_id'];
     $year = $_POST['year1'];
     $semester = $_POST['semester1'];
     $subjectname = $_POST['subject_name'];
     $subjectcode = $_POST['subject_code'];
     // echo  $courseid;

     $sql = "INSERT INTO `subjectdetails` (`subjectName`,`subjectCode`,`subjectYear`,`subjectSemester`,`subjectCourse`) VALUES ('$subjectname','$subjectcode','$year','$semester','$courseid')";
     $query = mysqli_query($conn, $sql);
     if ($query==TRUE) {
          echo 1;
     } else {
          echo 0;
     }

     // echo $query;

}
 
      
 
?>