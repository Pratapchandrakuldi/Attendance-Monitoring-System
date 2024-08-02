<?php

include('../connectionDB.php');

 
     $FirstName = $_POST['fisrtName'];
     $LastName = $_POST['lastName'];
     $Mail = $_POST['Mail'];
     $password = $_POST['Password']; 
     // echo  $courseid;

     $sql = "INSERT INTO `teacherdetails` (`teacherFirstName`,`teacherLastName`,`teacherMailId`,`teacherPassword`) VALUES ('$FirstName','$LastName','$Mail','$password')";
     $query = mysqli_query($conn, $sql);
     if ($query==TRUE) {
          echo 1;
     } else {
          echo 0;
     }

     // echo $query;

 
 
      
 
?>