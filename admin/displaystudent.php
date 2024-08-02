<?php
include('../connectionDB.php');
$sql = "SELECT * FROM     course AS c, studentdetails AS st WHERE st.studentCourse=c.courseId";
$query = mysqli_query($conn, $sql);
$output = "";

if (mysqli_num_rows($query) > 0) {
    $output .= '<table class="table caption-top text-dark">
      <thead>
        <tr>
          <th scope="col">Sl.No</th>
          <th scope="col">Name</th>
          <th scope="col">Roll_No</th>
          <th scope="col">Mail_Id</th>
          <th scope="col">Password</th> 
          <th scope="col">Course</th> 
          <th scope="col">Year</th> 
          <th scope="col">Semester</th> 
          <th scope="col">Edit</th>
          <th scope="col">Delete</th> 
        </tr>
      </thead>';
    $slno = 0;
    while ($row = mysqli_fetch_assoc($query)) {
        $slno++;
        $output .= "<tbody>
            <tr>
            <td>
                 {$slno}
            </td>  
              <td>
                {$row['studentFirstName']} {$row['studentLastName']}
              </td>
              <td>
              {$row['studentRollNo']}
            </td>
            <td>
            {$row['studentMailId']}
          </td>
            <td>
            {$row['studentPassword']}
         </td>  
         <td>
           {$row['courseName']}
         </td> 
         <td>
          {$row['studentYear']}
         </td>  
         <td>
            {$row['studentSemester']}
         </td> 
              <td>
                <button class='btn btn-primary' id='edit-btn' role='button' data-stueid='{$row["studentId"]}'>Edit</button>
              </td>
              <td>
                <button class='btn btn-primary'  id='delete-STUbtn' role='button'  data-stuid='{$row["studentId"]}'>Delete</button>
              </td>
            </tr> </tbody>";
    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}
