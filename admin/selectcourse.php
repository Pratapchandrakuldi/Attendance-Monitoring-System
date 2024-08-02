<?php
      include('../connectionDB.php');

      
            $sql="SELECT * FROM  course";
      $query=mysqli_query($conn,$sql);
      // $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output .="<option value='{$row["courseId"]}'>{$row['courseName']}</option>";
            }
             
            mysqli_close($conn);
            echo $output;
        }
      
       
      
?>