<?php
include('../connectionDB.php');

  $selectedSubjectId=$_POST['selectsubjId'];
  $selectedCourse=$_POST['selectbranch'];
$sql="SELECT * FROM subjectdetails AS s, course AS c,studentdetails AS st,assignsubject AS asigsub WHERE s.subjectCourse=c.courseId
 AND st.studentCourse=s.subjectCourse AND   c.courseId=' $selectedCourse' AND  asigsub.assignSubject='$selectedSubjectId'
 AND s.subjectSemester=asigsub.assignSemester";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
      $output.='<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">Name</th>
          <th scope="col">Registration</th>
          <th scope="col">Attendance</th>
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
                {$row['studentFirstName']} {$row['studentLastName']}
              </td>
              <td>
              {$row['studentRollNo']}
              <input hidden class='studentid' value='{$row['studentId']}'>
              
            </td>
            <td>
            <input class='form-check-input' type='checkbox' value='P' id='flexCheckChecked' checked>
       </td>  
            
            </tr> </tbody>";
      }
      $output.="</table>";
      mysqli_close($conn);
      echo $output;
}

// }



?>