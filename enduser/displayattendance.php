<?php
include('../connectionDB.php');


// Function to fetch student attendance percentage for a particular subject
$total_class="";
function getAttendancePercentageForSubject($student_id) {
  global $conn;
  
  $sql = "SELECT COUNT(attendanceStatus) as total_classes, SUM(attendanceStatus) as attended_classes 
          FROM attendancedetails 
          WHERE attendanceStudent = $student_id ";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $total_classes = $row['total_classes'];
      $_SESSION['delivered']=$row['total_classes'];
      $attended_classes = $row['attended_classes'];
      $_SESSION['attended']=$row['attended_classes'];
      return ($total_classes > 0) ? round(($attended_classes / $total_classes) * 100) : 0;
  } else {
      return 0;
  }

}
$currentuser = $_POST['current_user'];
// $currentuser = $_POST['select_semester'];
$sql="SELECT * FROM subjectdetails AS s, course AS c,studentdetails AS st WHERE s.subjectCourse=c.courseId AND st.studentCourse=c.courseId AND st.studentId='{$currentuser}' AND s.subjectStudent='{$currentuser}'";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
      $output.='<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">Subject </th>
          <th scope="col">Code</th>
          <th scope="col">Delivered</th>
          <th scope="col">Attend</th>
          <th scope="col">Percentage</th> 
        </tr>
      </thead>';
      $slno=0;
      while($row=mysqli_fetch_assoc($query)){
            $slno++;
            $attendance_percentage = getAttendancePercentageForSubject($row['studentId']);
            $delivered=$_SESSION['delivered'];
            $attendclass=$_SESSION['attended'];

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
            $delivered
       </td>  
         <td>
         $attendclass
         </td>
         <td>
         
       </td>
            
            </tr> 
            <tr>
            <td colspan='5'></td>
            <td>$attendance_percentage</td?
            </tr></tbody>";
      }
      $output.="</table>";
      mysqli_close($conn);
      echo $output;
}

// }



?>