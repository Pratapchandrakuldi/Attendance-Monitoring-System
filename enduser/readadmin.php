<?php
session_start();
  include ('../connectionDB.php');
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `adminlogin` WHERE `AdminName`='$username' AND `AdminPassword`='$password';";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    if(mysqli_num_rows($query)>0){
      
       while($row = mysqli_fetch_assoc($query)){
      $_SESSION['adminname']=$row['AdminName'];
      $_SESSION['adminpassword']=$row['AdminPassword'];
      
      echo "Login successfully...";
       exit;
       }  
    }else{
      echo "Failed to login..";
      
    }
  }


?>