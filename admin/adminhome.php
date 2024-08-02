<?php
session_start();
include('../connectionDB.php');
if (!isset($_SESSION['adminname']) && !isset($_SESSION['adminpassword'])) {
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

    #container {
      width: auto;
      height: auto;
    }

    #loginform {
      margin-left: 40%;
      margin-top: 10%;
    }

    .btn-close {
      color: black;
      font-size: larger;
      width: 30px;
      height: 30px;
    }

    #modal {
      background: rgba(0, 0, 0, 0.7);
      position: fixed;
      /* margin-left: 360px; */
      top: -10px;
      width: 100%;
      height: 100%;
      z-index: 100;
      display: none;

    }

    #close-btn1 {
      background: red;
      color: white;
      width: 30px;
      height: 30px;
      margin-right: 80;
      line-height: 30px;
      text-align: center;
      border-radius: 50px;
      position: absolute;
      top: 103px;
      right: 585px;
      cursor: pointer;

    }
  </style>

</head>

<body>
  <!-- start header -->

  <nav class="navbar navbar-expand-lg bg-success-subtle sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse float-end text-light end-20" id="">
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
          <li class="end-20 text-bg-light rounded">
            <a class="nav-link dropdown-toggle" href="Logoutadmin.php" role="button">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end header -->

  <!-- Background image start -->



  <!-- <div class=" text-bg-dark" height="1000px"> -->
  <!-- <img src="../Picture/adminimage_resize.jpeg" class="card-img" alt="Not Found" width="auto" height="auto"> -->
  <div class="container-fluid text-center bg-info" id="container">
    <p>Welcome to admin panel </p>

    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mb-4">
      <div class="col  ">
        <div class="p-3 bg-light" id="course"><i class="fa-solid fa-ranking-star"></i>Add Course</div>
      </div>
      <div class="col">
        <div class="p-3 bg-success" id="addsubject">Add Subject</div>
      </div>
      <div class="col">
        <div class="p-3 bg-danger" id="addteacher">Register Teacher</div>
      </div>
      <div class="col">
        <div class="p-3 bg-secondary" id="assignsubject">Assign Subject</div>
      </div>
      <div class="col">
        <div class="p-3 bg-warning" id="addstudent">Register Students</div>
      </div>
    </div>

    <!-- close button start -->
    <div data-bs-theme="dark">
      <button type="button" class="btn-close fs-2 " aria-label="Close"></button>
    </div>
    <!-- close button end -->



    <!-- form start -->
    <form method="post" action="" class="firstload" id="loginform">
      <!-- <div data-bs-theme="dark">
      <button type="button" class="btn-close fs-2 " style="margin-left: opx;" aria-label="Close"></button>
    </div> -->

      <!-- <button id="close">X</button> -->


      <!-- course start from here -->

      <div class="row  align-items-center ms bg-light ps-1 py-2" id="courseform" style="width: 400px;height:auto;">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label">Course</label>
        </div>
        <div class="col-auto">
          <input type="text" id="coursename" class="form-control">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary" id="courseadd">Add</button>
        </div>

      </div>

      <!-- course ene from here -->



    </form>

    <!-- form end -->


    <!--start course lis table-->
    <div id="courselist" class="firstload mb-3 text-center border border-2 border-dark my-2" style="width:800px;margin:auto;height:auto;background-color:lightgreen;">
      <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
        Course List
      </div>
      <div id="display"></div>


      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link text-white bg-primary">Pre</a>
          </li>
          <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link text-white bg-primary" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>

    <!--end course lis table-->

    <!-- start subject adding -->
    <div class="firstload row  align-items-right  bg-info mt-2" id="subject">
      <!-- <div data-bs-theme="dark">
      <button type="button" class="btn-close fs-2 " aria-label="Close"></button>
    </div> -->
      <!-- 1st -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Course</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select choosecourse" aria-label="Default select example" id="">
          <option selected>Select course</option>

        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 1st -->
      <!-- 2nd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Year</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select" aria-label="Default select example" id="yearselected1">
          <option selected>Select year</option>
          <option value="1" id="first">1st Year</option>
          <option value="2" id="second">2nd Year</option>
          <option value="3" id="third">3rd Year</option>
          <option value="4" id="fourth">4th Year</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 2nd -->
      <!-- 3rd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Semester</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select" aria-label="Default select example" id="semester">
          <option selected id="selectsemester">Select semester</option>
          <option value="1" id="semone">I sem</option>
          <option value="2" id="semtwo">II sem</option>
          <option value="3" id="semthree">III sem</option>
          <option value="4" id="semfour">IV sem</option>
          <option value="5" id="semfive">V sem</option>
          <option value="6" id="semsix">VI sem</option>
          <option value="7" id="semseven">VII sem</option>
          <option value="8" id="semeight">VIII sem</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 3rd -->
      <!-- 4th -->
      <div class="col-2  mt-2"></div>
      <div class="col-2  mt-2"></div>
      <div class="col-2  mt-2 my-2">
        <label for="inputPassword6" class="col-form-label">Subject</label>
      </div>
      <div class="col-2">
        <input type="text" id="subjectname" class="form-control" placeholder="Subject Name">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 4th -->
      <!-- 5th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2  mt-2">
        <label for="inputPassword6" class="col-form-label">Subject Code</label>
      </div>
      <div class="col-2">
        <input type="text" id="subjectcode" class="form-control" placeholder="Subject Name">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 5th -->
      <!-- button -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2">
        <label for="inputPassword6" class="col-form-label"></label>
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-primary" id="subjectadd">Add</button>
      </div>

      <div class="col-2"></div>
      <div class="col-2"></div>
    </div>


    <!-- button -->
    <!-- end subject adding -->

    <!--start SUBJECT  lisT table-->
    <div id="subjectlist" class="firstload mb-3 text-center border border-2 border-dark my-2" style="width:800px;margin:auto;height:auto;background-color:lightgreen;">
      <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
        Subject List
      </div>
      <div id="displaysubject"></div>


      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link text-white bg-primary">Pre</a>
          </li>
          <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link text-white bg-primary" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>

    <!--end subject list table-->

    <!-- start register teachers -->
    <div class="firstload row  align-items-right  bg-info mt-2" id="teacher">
      <!-- 1st -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">First Name</label>
      </div>
      <div class="col-2 mt-2">
        <input type="text" id="teacherfirst" class="form-control" placeholder="Teacher's First_Name">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 1st -->
      <!-- 2nd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Last NAme</label>
      </div>
      <div class="col-2 mt-2">
        <input type="text" id="teacherlast" class="form-control" placeholder="Teacher's Last_name">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 2nd -->
      <!-- 3rd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Mail Id</label>
      </div>
      <div class="col-2 mt-2">
        <input type="email" id="teachermail" class="form-control" placeholder="Teacher Email_Id">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 3rd -->
      <!-- 4th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Password</label>
      </div>
      <div class="col-2 mt-2">
        <input type="password" id="teacherpassword" class="form-control" placeholder="Teacher Password">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 4th -->
      <!-- button -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2">
        <label for="inputPassword6" class="col-form-label"></label>
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-primary" id="teacheradd">Add</button>
      </div>

      <div class="col-2"></div>
      <div class="col-2"></div>
    </div>



    <!-- end register teachers -->
    <!--start teachers lisT table-->
    <div id="teacherlist" class="firstload mb-3 text-center border border-2 border-dark my-2" style="width:800px;margin:auto;height:auto;background-color:lightgreen;">
      <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
        Teacher List
      </div>
      <div id="displayteacher"></div>


      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link text-white bg-primary">Pre</a>
          </li>
          <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link text-white bg-primary" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>

    <!--end teachers lisT table-->



    <!-- start assign teachert to subject adding -->
    <div class="firstload row  align-items-right  bg-info mt-2" id="assign_subject">


      <!-- 1st -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Teacher</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select " aria-label="Default select example" id="teacherselected">
          <option selected>Select Teacher</option>

        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 1st -->
      <!-- 2st -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Course</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select choosecourse" aria-label="Default select example" id="assigncourse">
          <option selected>Select course</option>

        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 2st -->
      <!-- 3nd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Year</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select year" aria-label="Default select example" id="yearselected2">
          <option selected>Select year</option>
          <option value="1" id="first">1st Year</option>
          <option value="2" id="second">2nd Year</option>
          <option value="3" id="third">3rd Year</option>
          <option value="4" id="fourth">4th Year</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 3nd -->
      <!-- 4th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Semester</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select semester" aria-label="Default select example" id="assignsemester">
          <option selected id="selectsemester">Select semester</option>
          <option value="1" class="semone">I sem</option>
          <option value="2" class="semtwo">II sem</option>
          <option value="3" class="semthree">III sem</option>
          <option value="4" class="semfour">IV sem</option>
          <option value="5" class="semfive">V sem</option>
          <option value="6" class="semsix">VI sem</option>
          <option value="7" class="semseven">VII sem</option>
          <option value="8" class="semeight">VIII sem</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 4th -->
      <!-- 5th -->
      <div class="col-2  mt-2"></div>
      <div class="col-2  mt-2"></div>
      <div class="col-2  mt-2 my-2">
        <label for="inputPassword6" class="col-form-label">Subject</label>
      </div>
      <div class="col-2">
        <select class="form-select" aria-label="Default select example" id="subjectselected2">
          <option selected id="">Select Subject</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 5th -->
      <!-- button -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2">
        <label for="inputPassword6" class="col-form-label"></label>
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-primary" id="assignsubjectadd">Add</button>
      </div>

      <div class="col-2"></div>
      <div class="col-2"></div>
    </div>
    <!-- button -->

    <!-- end assign teachert to subject adding -->
    <!--start assignteachers lisT table-->
    <div id="assignteacherlist" class="firstload mb-3 text-center border border-2 border-dark my-2" style="width:800px;margin:auto;height:auto;background-color:lightgreen;">
      <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
        Assign Subject to Teacher
      </div>
      <div id="displayassignteacher"></div>


      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link text-white bg-primary">Pre</a>
          </li>
          <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link text-white bg-primary" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>

    <!--end assignteachers lisT table-->

    <!-- start students adding -->
    <div class="firstload row  align-items-right  bg-info mt-2" id="student">


      <!-- 1st -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">First_Name</label>
      </div>
      <div class="col-2 mt-2">
        <input type="text" id="studentfirst" class="form-control" placeholder="Students First_Name">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 1st -->
      <!-- 2nd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Last_name</label>
      </div>
      <div class="col-2 mt-2">
        <input type="text" id="studentlast" class="form-control" placeholder="Students Last_Name">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 2nd -->
      <!-- 3rd -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Roll_No</label>
      </div>
      <div class="col-2 mt-2">
        <input type="text" id="studentroll" class="form-control" placeholder="Students Roll_No">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 3rd -->
      <!-- 4th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Mail_Id</label>
      </div>
      <div class="col-2 mt-2">
        <input type="email" id="studentmail" class="form-control" placeholder="Students Mail_Id">
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 4th -->
      <!-- bydefault password -->
      <!-- 6th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Course</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select choosecourse" aria-label="Default select example" id="studentcourse">
          <option selected>Select course</option>

        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 6th -->
      <!-- 7th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Year</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select year" aria-label="Default select example" id="studentyear">
          <option selected>Select year</option>
          <option value="1" id="first">1st Year</option>
          <option value="2" id="second">2nd Year</option>
          <option value="3" id="third">3rd Year</option>
          <option value="4" id="fourth">4th Year</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 7th -->
      <!-- 8th -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2 mt-2">
        <label for="inputPassword6" class="col-form-label">Semester</label>
      </div>
      <div class="col-2 mt-2">
        <select class="form-select semester" aria-label="Default select example" id="studentsemester">
          <option selected id="selectsemester">Select semester</option>
          <option value="1" class="semone">I sem</option>
          <option value="2" class="semtwo">II sem</option>
          <option value="3" class="semthree">III sem</option>
          <option value="4" class="semfour">IV sem</option>
          <option value="5" class="semfive">V sem</option>
          <option value="6" class="semsix">VI sem</option>
          <option value="7" class="semseven">VII sem</option>
          <option value="8" class="semeight">VIII sem</option>
        </select>
      </div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <!-- 8th -->
      <!-- button -->
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2">
        <label for="inputPassword6" class="col-form-label"></label>
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-primary" id="studentbutton">Add</button>
      </div>

      <div class="col-2"></div>
      <div class="col-2"></div>
    </div>
    <!-- button -->

    <!-- end students adding -->



    <!--start students lisT table-->
    <div id="studentlist" class="firstload mb-3 text-center border border-2 border-dark my-2" style="width:1000px;margin:auto;height:auto;background-color:lightgreen;">
      <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
        Students List
      </div>
      <div id="displaystudent"></div>


      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link text-white bg-primary">Pre</a>
          </li>
          <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link text-white bg-primary" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>

    <!--end students lisT table-->

    <!--  start modal to edit course-->
    <div id="modal">
      <div class="mb-3 text-center border border-2 border-dark" style="width:800px;margin:auto;height:auto;background-color:lightgreen;margin-top:120px;">
        <div id="close-btn1">X</div>
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
          Add City
        </div>
        <div id="modal-form">
          <table width=100%;>
          </table>
          <br>
        </div>
      </div>
    </div>
    <!--  end  modal-->















    <br>
    <br>
  </div>

  <!-- </div> -->









  <!-- Background image end -->










  <!-- start footer area -->
  <div class="container-fluid bg-dark text-white" style="height:100px">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 border-top">
      <span class="align-items-left" style="margin-left:30px;margin-top:20px; ">
        <p>&#169 Students AttendanceMonitoring All right reserved.</p>
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
  <script src="../fontawesome/js/all.min.js"></script>
  <script src="C:/xampp/htdocs/Project4/AttendanceMonitoring/js/ajaxcity.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



  <script src="admin.js"></script>




</body>

</html>