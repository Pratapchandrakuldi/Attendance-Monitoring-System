<?php
session_start();
if (!isset($_SESSION['studentname']) && !isset($_SESSION['studentpassword']) && $_SESSION['studentID']) {
  header('location:Home.php');
}

// echo $_SESSION['studentID'];

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
  </style>

</head>

<body>
  <!-- start header -->

  <nav class="navbar navbar-expand-lg bg-primary sticky-top">
    <div class="container-fluid">
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
          <li class="nav-item dropdown float-end">
            <a class="nav-link dropdown-toggle" href="LogoutUser.php" role="button">
              Logout
            </a>
            <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="LogoutUser.php">Students</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end header -->

  <div class=" position-relatives mt- ps-4 overflow-auto bg-info-subtle" id="cutm">
    <img src="../Picture/Studentlogo.jpeg" class="rounded float-start" alt="..." width="250px" height="250px">

    <div class="text-center my-5 cutmtext">
      <h4><B><strong> WELCOME TO </strong><B></h4>
      <h4><B><strong> CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT</strong><B></h4>
    </div>


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
  </div>

  <!-- end college and memebers  -->
  <!-- start modal registration subject -->
  <div class="modal" tabindex="-1" id="Subjectregistermodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Register your subject</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select class="p-3 bg-white modal-content" id="selectsubject">
            <option>Select Subject</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" id="addsubject" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal registration subject -->

  <!-- Background image start -->


  <div class="container-fluid text-center bg-info mb-4" id="studentpanel">
    <button type="button" id="backpanel" class="btn btn-warning pt-4" style="float:right;">Back</button>
    <!-- </div> -->
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mb-4 pt-4">
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
          <option class="semester" value="I sem">1</option>
          <option class="semester" value="II sem">2</option>
          <option class="semester" value="III sem">3</option>
          <option class="semester" value="IV sem">4</option>
          <option class="semester" value="V sem">5</option>
          <option class="semester" value="VI sem">6</option>
        </select>
      </div>
    </div>
    <div style="height:100px;">

    </div>
     <!--start students lisT table-->
  <div id="studentlist" class="mb-3 text-center border border-2 border-dark my-2" style="width:auto;margin:auto;height:auto;background-color:lightgreen;">
    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
      Students Attendance
    </div>
    <div id="displaystudent"></div>
    <nav aria-label="Page navigation example">
    </nav>
  </div>

  <!--end students lisT table-->
  </div>
  <!-- Background image end -->
  





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

  <script src=" ../js/bootstrap.min.js"></script>
  <script src="../js/popper1.min.js"></script>
  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="../js/jquery-3.6.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


  <script>
    $(document).ready(function() {
      $("#studentpanel").hide();
      $("#Subjectregistermodal").hide();
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
        // var searchbranch = $(this).val();
        $('.semester').show();


      });


      $("#selectsemester").on("change", function() {
        var currentuser=<?php echo $_SESSION['studentID'] ?> ;
        var selectsemester = $(this).val();
        var searchbranch = $("#selectbranch option:selected").val();
        // alert(currentuser);
        $('#studentlist').show();
        
        $.ajax({
          url: 'displayattendance.php',
          type: 'POST',
          data:{current_user:currentuser,
            search_branch:searchbranch
          },
          success: function(data) {
            $("#displaystudent").html(data);
          }
        });

      });

      ///end on chnage session

      //start subject registration
      $(".btn-close").on("click", function() {
        $('#Subjectregistermodal').hide();
      });


      $("#registerimg").on("click", function() {
        var searchbranch = $(this).val();
        $('#Subjectregistermodal').show();
        $.ajax({
          url: 'selectsubject.php',
          type: 'POST',
          success: function(data) {
            $("#selectsubject").append(data);
          }
        });


      });
      //start subject registration
      //Start attendance show
      $("#attendanceimg").on("click", function() {
        $('#studentpanel').show();
        $('#cutm').hide();
      });
      $("#backpanel").on("click", function() {
        $('#studentpanel').hide();
        $('#cutm').show();
      });
      // end attendance show
     // start inser / register sun=bject
      $("#addsubject").on("click", function() {
        var currentuser=<?php echo $_SESSION['studentID'] ?> ;
        var subjectid = $("#selectsubject option:selected").val();
        // alert(subjectid);
        $.ajax({
          url: 'Registersubject.php',
          type: 'POST',
          data:{current_user:currentuser,
            subject_id:subjectid},
          success: function(data) {
            if(data){
              alert("Data inserted successfully!!!");
              $('#studentpanel').hide();
            }else{
               alert("Unable to insert Data!!!");
            }
            // $("#selectsubject").append(data);
          }
        });
      });
        //start inser / register sun=bject





    });
  </script>






</body>

</html>