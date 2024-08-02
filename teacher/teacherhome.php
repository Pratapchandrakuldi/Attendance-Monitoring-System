<?php
session_start();
include('../connectionDB.php');
if (!isset($_SESSION['teachername']) && !isset($_SESSION['teacherpassword'])) {
  header('location:../enduser/Home.php');
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" ../css/bootstrap.min.css">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <title>Admin Login</title>
  <style>
    #font {
      width: 20px;
      height: 20px;
      margin: auto;
      margin-top: 20px;
      margin-left: 25%;
    }

    #dateattendance {
      float: right;
      margin: 5px 170px;

    }
  </style>

</head>

<body>
  <!-- start header -->

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class=" container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="Logoutteacher.php" role="button">
              Logout
            </a>
            <!-- <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#" id="students">Students</a></li>
               <li><a class="dropdown-item" href="#" id="Teachers">Teachers</a></li>
               <li><a class="dropdown-item" href="#" id="admin"> Admin</a></li>
             </ul> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end header -->

  <!-- Background image start -->



  <div class="container-fluid text-center bg-info mb-4">
    <!-- <img src="../Picture/adminimage_resize.jpeg" class="card-img" alt="Not Found" width="auto" height="auto"> -->
    <!-- <div class="card-img-overlay"> -->
    <p>Welcome to admin panel </p>
    <!-- </div> -->
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mb-4">
      <div class="col  ">
        <select class="p-3 bg-info-subtle" id="session">
          <option>select Academic year</option>
          <option>2022-2023</option>
          <option>2023-2024</option>
          <option>2024-2025</option>
          <option>2025-2026</option>
        </select>
      </div>
      <div class="col">
        <select class="p-3 bg-success" id="selectbranch">
          <option>Select Branch</option>
        </select>
      </div>
      <div class="col">
        <select class="p-3 bg-danger" id="selectsemester">
          <option>Select Semester</option>
          <option class="semester">1</option>
          <option class="semester">2</option>
          <option class="semester">3</option>
          <option class="semester">4</option>
        </select>
      </div>
      <div class="col">
        <select class="p-3 bg-danger" id="selectsubject">
          <option>Select Subject</option>
        </select>
      </div>
    </div>




    <!-- Background image end -->

    <!--start students lisT table-->
    <div id="studentlist" class="mb-3 text-center border border-2 border-dark my-2" style="width:auto;margin:1000;height:auto;background-color:lightgreen;">
      <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
        Students Attendance
      </div>
      <div id="dateattendance"><input type="date" class="dateattendance"></div>
      <div id="displayattendance"></div>
      <nav aria-label="Page navigation example">
        <button class='btn btn-primary me-md-2 ' id='attendance-btn' type='submit'>ADD CITY</button>
      </nav>
    </div>

    <!--end students lisT table-->




    <div class="row row-cols-1 row-cols-md-5 g-4 ms-5">
      <div class="col">

      </div>
      <div class="col">
        <img src="../Picture/Registerlogo.jpeg" id="registerimg" class="card-img-top rounded- rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">

      </div>
      <div class="col">
      <!-- <img src="../Picture/Attendancelogo.jpg" id="attendanceimg" class="card-img-top rounded rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px"> -->
      </div>
      <div class="col">
        <img src="../Picture/Attendancelogo.jpg" id="attendanceimg" class="card-img-top rounded rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">
      </div>
      <div class="col">
      </div>
      <div class="col">
      </div>
      <div class="col">
        <div class="" style="height:200px;">
        </div>
      </div>


    </div>










    <!-- start footer area -->
    <div class="container-fluid text-bg-dark" style="height:100px">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <span class="  align-items-left" style="margin-left:30px;margin-top:20px; ">
          <p>&#169 Attendance Monitoring System All right reserved.</p>
        </span>
        <span class="d-flex  align-items-center" id="font">
          <i class="fa-brands fa-facebook-f fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa-brands fa-twitter fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
          <b style="font-size:22px;">in</b>&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa-brands fa-pinterest fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa-brands fa-google-plus-g fa-lg" style="color: #ffffff;"></i>
        </span>
      </footer>
    </div>
    <!-- end footer area -->


    <!--javaScript link from bootsrap and jQuery link-->

    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/jquery-3.6.2.min.js"></script>
    <script src="../js/ajax.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



    <script>
      $(document).ready(function() {

        $('.semester').hide();
        $('#studentlist').hide();



        ///start on chnage session
        $("#session").on("change", function() {
          var searchsession = $(this).val();
          //  console.log(regcity);
          $.ajax({
            url: 'selectbranch.php',
            type: 'POST',
            success: function(data) {
              $("#selectbranch").append(data);
            }
          });
        });


        $("#selectbranch").on("change", function() {
          var searchbranch = $(this).val();
          $('.semester').show();


        });


        $("#selectsemester").on("change", function() {
          var searchsemester = $(this).val();
          $.ajax({
            url: 'selectsubject.php',
            type: 'POST',
            success: function(data) {
              $("#selectsubject").append(data);
            }
          });

        });

        ///end on chnage session


        ///start student details for attendance
        $("#selectsubject").on("change", function() {
          $('#studentlist').show();
          var searchbranch = $("#selectbranch option:selected").val();
          var searchsubject = $(this).val();
          // alert(searchbranch);
          // function loadAttendance() {
          $.ajax({
            url: 'TakeAttendance.php',
            type: 'POST',
            data: {
              selectsubjId: searchsubject,
              selectbranch: searchbranch
            },
            success: function(data) {
              $("#displayattendance").html(data);
            }
          });
          // }
          // loadAttendance();

        });
 

        // end insert assign teachers table

        ///Start insert attendance
        $("#attendance-btn").on("click",function(){
         
        var attendanceData = [];
        var studentData = [];
        var dateData= [];
        // alert(studentid);
        //start student array information
        $(".form-check-input").each(function(){ 
          if($(this).is(":checked")){
            attendanceData.push($(this).val());
          }
        });
        attendanceData= attendanceData.toString().split(",");
        //  alert(studentData);
        //end student array information


        //start student array information
         $(".studentid").each(function(){
          studentData.push($(this).val());
          dateData.push($(".dateattendance").val());
        });
        studentData= studentData.toString().split(",");
        dateData= dateData.toString().split(",");
        // alert(studentData);
        //end student array information


        $.ajax({
            url: "submitattendance.php",
            type: "post",
            data: { attendance_data: attendanceData,
              student_Data:studentData,
              date_Data:dateData
             },
            success: function(data){
                // $("#result").html(response);
                if(data==1){
                    alert("Data inserted Successfully!!!") ;
                }else{
                  alert("Unable to insert Data!!") ;
                }
            }
        });
    });

        ///end insert attendance



      });
    </script>




</body>

</html>