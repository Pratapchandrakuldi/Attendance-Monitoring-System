<?php
  session_start();
  include ('../connectionDB.php');
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `studentdetails` WHERE `studentRollNo`='$username' AND `studentPassword`='$password';";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    if(mysqli_num_rows($query)>0){
      
       while($row = mysqli_fetch_assoc($query)){
      $_SESSION['studentname']=$row['studentRollNo'];
      $_SESSION['studentpassword']=$row['studentPassword'];
      $_SESSION['studentID']=$row['studentId'];
      // echo  $_SESSION['adminname'];
      echo 1;
       exit;
       }  
    }else{
      echo 0;
      // echo  $_SESSION['adminname'];
    }
  }



?>