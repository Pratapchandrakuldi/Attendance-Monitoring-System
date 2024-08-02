<?php
include('../connectionDB.php');
$sql="SELECT * FROM   teacherdetails";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
      $output.='<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">First_Name </th>
          <th scope="col">Last_Name</th>
          <th scope="col">Email_Id</th>
          <th scope="col">Password</th> 
          <th scope="col">Edit</th>
          <th scope="col">Delete</th> 
        </tr>
      </thead>';
      $slno=0;
      while($row=mysqli_fetch_assoc($query)){
            $slno++;
            $output.="<tbody>
            <tr>
            <td>
                 {$slno}
            </td>  
              <td>
                {$row['teacherFirstName']}
              </td>
              <td>
              {$row['teacherLastName']}
            </td>
            <td>
            {$row['teacherMailId']}
       </td>  
         <td>
           {$row['teacherPassword']}
         </td> 
              <td>
                <button class='btn btn-primary' id='edit-btn' role='button' data-teacheid='{$row["teacherId"]}'>Edit</button>
              </td>
              <td>
                <button class='btn btn-primary'  id='delete-TEACHbtn' role='button'  data-teachid='{$row["teacherId"]}'>Delete</button>
              </td>
            </tr> </tbody>";
      }
      $output.="</table>";
      mysqli_close($conn);
      echo $output;
}



?>