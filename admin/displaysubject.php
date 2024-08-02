<?php
include('../connectionDB.php');
$sql="SELECT * FROM subjectdetails AS s, course AS c WHERE s.subjectCourse=c.courseId";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
      $output.='<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">Subject </th>
          <th scope="col">Code</th>
          <th scope="col">Year</th>
          <th scope="col">Semester</th>
          <th scope="col">Course</th>
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
                {$row['subjectName']}
              </td>
              <td>
              {$row['subjectCode']}
            </td>
            <td>
            {$row['subjectYear']}
       </td>  
         <td>
           {$row['subjectSemester']}
         </td>
         <td>
         {$row['courseName']}
       </td>
              <td>
                <button class='btn btn-primary' id='edit-btn' role='button' data-subeid='{$row["subjectId"]}'>Edit</button>
              </td>
              <td>
                <button class='btn btn-primary'  id='delete-SUBbtn' role='button'  data-subid='{$row["subjectId"]}'>Delete</button>
              </td>
            </tr> </tbody>";
      }
      $output.="</table>";
      mysqli_close($conn);
      echo $output;
}



?>