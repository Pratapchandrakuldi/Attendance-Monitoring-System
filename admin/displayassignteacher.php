<?php
include('../connectionDB.php');
$sql="SELECT * FROM   teacherdetails AS t, subjectdetails AS s, course AS c, assignsubject AS a WHERE t.teacherId=a.assignTeacher AND s.subjectId=a.assignSubject AND c.courseId=a.assignCourse";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
      $output.='<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">Teacher Name</th>
          <th scope="col">Course Name</th>
          <th scope="col">Year</th>
          <th scope="col">Semester</th> 
          <th scope="col">Subject</th> 
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
                {$row['teacherFirstName']} {$row['teacherLastName']}
              </td>
              <td>
              {$row['courseName']}
            </td>
            <td>
            {$row['assignYear']}
          </td>
            <td>
            {$row['assignSemester']}
       </td>  
         <td>
           {$row['subjectName']}
         </td> 
              <td>
                <button class='btn btn-primary' id='edit-btn' role='button' data-assigneid='{$row["assignsubjectId"]}'>Edit</button>
              </td>
              <td>
                <button class='btn btn-primary'  id='delete-ASSIGNbtn' role='button'  data-assignid='{$row["assignsubjectId"]}'>Delete</button>
              </td>
            </tr> </tbody>";
      }
      $output.="</table>";
      mysqli_close($conn);
      echo $output;
}



?>