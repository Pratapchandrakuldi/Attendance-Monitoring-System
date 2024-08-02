 <?php
  session_start();
  include('../connectionDB.php');
  if (isset($_SESSION['adminname']) && isset($_SESSION['adminpassword'])) {
    header('location:../admin/adminhome.php');
  }

  if (isset($_SESSION['studentname']) && isset($_SESSION['studentpassword']) && $_SESSION['studentID']) {
    header('location:LoginUser.php');
  }

  if (isset($_SESSION['teachername']) && isset($_SESSION['teacherpassword'])) {
    header('location:../teacher/teacherhome.php');
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

     #cutmimg:hover {
       color: blue;
     }

     .cutmtext>h4,
     h4 {
       font-size: 50px;
       font-weight: 200px;
       font-style: italic;
       color: brown;
     }
     /* .col { 
  position: relative;
  animation: mymove 5s infinite;
  animation-timing-function: linear;
}

@keyframes mymove {
  from {left: 0px;}
  to {left: 50px;}
} */
/* img {
  position: absolute;
  clip: rect(10px,60px,200px,1px);
} */
   </style>

 </head>

 <body class="bg-info-subtle">
   <!-- start header -->

   <nav class="navbar navbar-expand-lg bg-primary sticky-top">
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
             <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
               Login
             </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#" id="students">Students</a></li>
               <li><a class="dropdown-item" href="#" id="Teachers">Teachers</a></li>
               <li><a class="dropdown-item" href="#" id="admin"> Admin</a></li>
             </ul>
           </li>
         </ul>
       </div>
     </div>
   </nav>

   <!-- end header -->



   <!-- Background image start -->



   <div class="loginform bg-light-subtle ps-4 mt-5 mx-5 ms-5">
     <button type="button" class="btn-close float-end mt-3 mx-5" aria-label="Close" id="close"></button>
     <figure class="figure col-6 mt-5">
       <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
       <img src="../Picture/Admin.jpg" class="figure-img img-fluid rounded col-12 ms-5" alt="Not Found" id="imageadmin">
       <img src="../Picture/faculty+banner.jpg" class="figure-img img-fluid rounded col-12 ms-5" alt="Not Found" id="imageteacher">
       <img src="../Picture/Students3.jpg" class="figure-img img-fluid rounded col-12 ms-5 bg-info-subtle" alt="Not Found" id="imagestudent">
     </figure>
     <!-- <img src="../Picture/backimage.jpeg" class="card-img" alt="Not Found" width="auto" height="auto"> -->
     <!-- <div class="card-img-overlay float-end "> -->
     <form method="POST" action="" class="loginform position-absolute top-50 end-0 translate-middle text-bg-secondary ps-4 py-4 pt-4 px-4 rounded-3 " width="200px">
       <div id="login_admin">
         <div class="mb-3 mt-3">
           <label for="exampleInputEmail1" class="form-label">Username</label>
           <input type="text" class="form-control" id="usernameadmin" placeholder="Eneter Admin">
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" class="form-control" id="passwordadmin">
         </div>
         <div class="mb-3 form-check"></div>
         <button type="submit" class="btn btn-primary" id="login">Submit</button>
       </div>

       <!-- start teacher login form -->
       <div id="login_teacher">
         <div class="mb-3 mt-3">
           <label for="exampleInputEmail1" class="form-label">Username</label>
           <input type="email" class="form-control" id="usernameteacher" placeholder="Teacher_MailID">
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" class="form-control" id="passwordteacher">
         </div>
         <div class="mb-3 form-check"></div>
         <button type="submit" class="btn btn-primary" id="login2">Submit</button>
       </div>


       <!-- end tecaher login form -->
       <!-- start stduent login form -->
       <div id="login_student">
         <div class="mb-3 mt-3">
           <label for="exampleInputEmail1" class="form-label">Username</label>
           <input type="text" class="form-control" id="usernamestudent" placeholder="Eneter Student">
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" class="form-control" id="passwordstudent">
         </div>
         <div class="mb-3 form-check"></div>
         <button type="submit" class="btn btn-primary" id="login3">Submit</button>
       </div>
       <!-- end student login form -->
     </form>
     <!-- </div> -->
   </div>




   <!-- Background image end -->

   <!-- start college and memebers  -->
   <div class=" position-relatives mt-5 ps-4 overflow-auto bg-info-subtle" id="cutm">
     <img src="../Picture/CUTMLOGO.png" class="rounded float-start" alt="..." width="250px" height="250px">

     <div class="text-center my-5 cutmtext">
       <h4><B><strong> WELCOME TO </strong><B></h4>
       <h4><B><strong> CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT</strong><B></h4>
     </div>


     <div class="row row-cols-1 row-cols-md-5 g-4 ms-5">
       <div class="col">

       </div>
       <div class="col">
         <div class="card">
           <img src="../Picture/photo_me.jpg" id="cutmimg" class="card-img-top rounded- rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">
           <div class="card-body">
             <h5 class="card-title">Pratap Chandra Kuldi</h5>
             <p class="card-text">MCA 2nd Semester</p>
             <p class="card-text">230720100125</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="../Picture/Jagyan.jpg" class="card-img-top rounded rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">
           <div class="card-body">
             <h5 class="card-title">Jagyan Prakash Sahoo</h5>
             <p class="card-text">MCA 2nd Semester</p>
             <p class="card-text">230720100159</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="../Picture/Swati.jpg" class="card-img-top rounded rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">
           <div class="card-body">
             <h5 class="card-title">Swati Smaranika Choudhury</h5>
             <p class="card-text">MCA 2nd Semester</p>
             <p class="card-text">230720100140</p>
           </div>
         </div>
       </div>
       <div class="col">

       </div>
       <div class="col">

       </div>
       <div class="col">
         <div class="card">
           <img src="../Picture/Satyajit.jpg" class="card-img-top rounded rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">
           <div class="card-body">
             <h5 class="card-title">Satyajit Samantaray</h5>
             <p class="card-text">MCA 2nd Semester</p>
             <p class="card-text">230720100165</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="../Picture/sonu.jpg" class="card-img-top rounded rounded-circle pt-3 px-5" alt="Not Found" width="20px" height="200px">
           <div class="card-body">
             <h5 class="card-title">Subhranshu Sekhar Swain</h5>
             <p class="card-text">MCA 2nd Semester</p>
             <p class="card-text">230720100166</p>
           </div>
         </div>
       </div>

     </div>
   </div>

   <!-- end college and memebers  -->











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
   <script src="../fontawesome/js/all.min.js"></script>
   <script src="../js/ajax.min.js" type="text/javascript"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



   <script>
     $(document).ready(function() {
       $(".loginform").hide();



       // start show modal
       $(document).on("click", "#close", function() {
         $(".loginform").hide();
         $("#cutm").show();
         // $("#usernameteacher").hide();
         //  $("#passwordteacher").hide();
         //  $("#usernameadmin").hide();
         //  $("#passwordadmin").hide();
         // $("#usernamestduent").hide();
         // $("#passwordstduent").hide();
         // $("#login").hide();

       });
       ///end show model

       //start hover image


       //end hover image




       ///////////////////////////////////

       $(document).on("click", "#admin", function(e) {
         e.preventDefault();
         $(".loginform").show(); 
         $("#login_admin").show();
         $("#imageadmin").show();
         $("#imageteacher").hide();
         $("#imagestudent").hide();
         $("#login_student").hide();
         $("#login_teacher").hide();

         $("#cutm").hide();

         $("#login").click(function() {
           var username = $("#usernameadmin").val();
           var password = $("#passwordadmin").val();
           $.ajax({
             url: 'readadmin.php',
             type: 'POST',
             data: {
               username: username,
               password: password
             },
             success: function(data) {
               //  console.log(data);
               alert(data);
               //  if(data ==1){  
               //     alert("login successful");

               //  }else{
               //   alert("Failed to login");
               //  }
             }
           });
         });



       });




       //  teacher panel start
       $(document).on("click", "#Teachers", function(e) {
         e.preventDefault();
         $(".loginform").show();
         $("#cutm").hide();
          $("#imageadmin").hide();
         $("#imageteacher").show();
         $("#imagestudent").hide();
         $("#login_teacher").show();
         $("#login_student").hide();
         $("#login_admin").hide();

         $("#login2").click(function() {
           let username = $("#usernameteacher").val();
           var password = $("#passwordteacher").val();
           // alert(username);
           //  document.write(username);
           $.ajax({
             url: 'readteacher.php',
             type: 'POST',
             data: {
               username: username,
               password: password
             },
             success: function(data) {
               //console.log(data);
               //  alert(data);
               if (data == 1) {
                 alert("login successful");

               } else {
                 alert("Failed to login");
               }
             }
           });
         });



       });







       // teacher panel ent


       //  readuser start

       $(document).on("click", "#students", function(e) {
         e.preventDefault();
         $(".loginform").show();
         $("#cutm").hide();
         $("#imageadmin").hide();
         $("#imageteacher").hide();
         $("#imagestudent").show();
         $("#login_student").show();
         $("#login_admin").hide();
         $("#login_teacher").hide();

         $("#login3").click(function() {
           let username = $("#usernamestudent").val();
           var password = $("#passwordstudent").val();
          //  alert(username);
           //  document.write(username);
           $.ajax({
             url: 'readuser.php',
             type: 'POST',
             data: {
               username: username,
               password: password
             },
             success: function(data) {
               //console.log(data);
               // alert(data);
               if (data == 1) {
                 alert("login successfully");

               } else {
                 alert("Failed to login");
               }
             }
           });
         });


       });






       //readuser end



     });
   </script>




 </body>

 </html>