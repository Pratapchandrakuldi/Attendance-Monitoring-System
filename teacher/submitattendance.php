<?php

include('../connectionDB.php');

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$attendancedata = $_POST['attendance_data'];
$studentData = $_POST['student_Data'];
$dateData = $_POST['date_Data']; 
// echo  $courseid;

$count=count($studentData);
                                                 //attendanceId
for ($i = 0; $i < $count; $i++) {
   $data1 = $attendancedata[$i];
   $data2 = $dateData[$i];
   $data3 = $studentData[$i];

   $sql = "INSERT INTO attendancedetails (attendanceStatus,attendanceDate,attendanceStudent) 
   VALUES ('$data1' ,'$data2','$data3');";
   $query = mysqli_query($conn, $sql);
    
}
if ($query == TRUE) {
    echo 1;
} else {
    echo 0;
}
}
























    //  $attendancedata = $_POST['attendance_data'];
    //  $studentData = $_POST['student_Data'];
    //  $dateData = $_POST['date_Data']; 
    //  // echo  $courseid;
     
    //  $sql = "INSERT  `attendancedetails` (`attendanceStatus`,`attendanceDate`,`attendanceStudent`) VALUES ('$attendancedata' ,'$dateData','$studentData');";
    //  $query = mysqli_query($conn, $sql);
    //  if ($query==TRUE) {
    //       echo 1;
    //  } else {
    //       echo 0;
    //  }

     // echo $query;

 
 
      
 
?>