<?php
include('../connectionDB.php');
$sql="SELECT * FROM course";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
      $output.='<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">City Name</th>
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
                {$row['courseName']}
              </td>
              <td>
                <button class='btn btn-primary' id='cedit-btn' role='button' data-ceid='{$row["courseId"]}'>Edit</button>
              </td>
              <td>
                <button class='btn btn-primary'  id='delete-btn' role='button'  data-id='{$row["courseId"]}'>Delete</button>
              </td>
            </tr> </tbody>";
      }
      $output.="</table>";
      mysqli_close($conn);
      echo $output;
}



?>