<?php
 include('../connectionDB.php');

if(isset($_POST['course_name'])){
       $courseId=$_POST['id'];
       $course=$_POST['course_name'];
            

     $sql="UPDATE course SET  courseName ='{$course}' WHERE courseId='{$courseId}'";
     $query=mysqli_query($conn,$sql) or die("connection failed");
     if($query==TRUE){
      echo 1;
     }else{
      echo 0;
     }
    }


?>