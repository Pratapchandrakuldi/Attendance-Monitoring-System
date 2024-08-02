<?php
    session_start();
    include ('../connectionDB.php');
     session_unset();
     session_destroy();
     header('location:Home.php');
    
    


?>