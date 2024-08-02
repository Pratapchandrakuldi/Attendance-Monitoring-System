<?php
      include('../connectionDB.php');

      $courseid=$_POST['edit_id'];
            $sql="SELECT * FROM  course WHERE courseId={$courseid}";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output .="<tr>
                  <td>
                       <div style='margin-left:100px;margin-right:100px;margin-top:40px;height:auto;'>  
                           <input type='text' class='form-control border border-2 border-success my-4' placeholder='Course name' 
                               id='courseed' value='{$row["courseName"]}'>
                           <input type='text' id='cedit-id' hidden value='{$row["courseId"]}'>
                        </div>
                  </td> 
                  /tr>
                 <tr>
                 <td> 
                    <div class='d-grid gap-2 d-md-flex col-3  mx-auto my-1'>
                     <button class='btn btn-primary me-md-2' id='update-cbtn'  type='submit'>ADD CITY</button>
                     <button class='btn btn-primary' type='reset'>RESET</button>
                    </div>
                  </td>";
                  
            }
            $output.="</tr>";
            mysqli_close($conn);
            echo $output;
        }
      
       
      
?>