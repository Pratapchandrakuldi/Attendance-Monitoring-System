$(document).ready(function() {
    $("#loginform").hide();
    $("#courselist").hide();
    $("#subject").hide();
    $("#subjectlist").hide();
    $("#teacherlist").hide();
    $("#teacher").hide();
    $("#assign_subject").hide();
    $("#assignteacherlist").hide();
    $("#student").hide();
    $("#studentlist").hide();
    $("#modal").hide();

    function semesterLoad() {
      $("#semone").hide();
      $("#semtwo").hide();
      $("#semthree").hide();
      $("#semfour").hide();
      $("#semfive").hide();
      $("#semsix").hide();
      $("#semseven").hide();
      $("#semeight").hide();
      /////////////////////
      $(".semone").hide();
      $(".semtwo").hide();
      $(".semthree").hide();
      $(".semfour").hide();
      $(".semfive").hide();
      $(".semsix").hide();
      $(".semseven").hide();
      $(".semeight").hide();
    }
    semesterLoad();

    //close button start
    $(".btn-close").on("click", function() {
      $("#loginform").hide();
      $("#courselist").hide();
      $("#subjectlist").hide();
      $("#teacherlist").hide();
      $("#subject").hide();
      $("#teacher").hide();
      $("#assign_subject").hide();
      $("#assignteacherlist").hide();
      $("#student").hide();
      $("#studentlist").hide();

    });
    // close button end



    //select phase start
    $("#yearselected1").on("change", function() {
      var name = $('#yearselected1 option:selected').val();
      //  alert(name);
      if (name == 1) {
        $("#semone").show();
        $("#semtwo").show();
        $("#semthree").hide();
        $("#semfour").hide();
        $("#semfive").hide();
        $("#semsix").hide();
        $("#semseven").hide();
        $("#semeight").hide();
      } else if (name == 2) {
        $("#semone").hide();
        $("#semtwo").hide();
        $("#semthree").show();
        $("#semfour").show();
        $("#semfive").hide();
        $("#semsix").hide();
        $("#semseven").hide();
        $("#semeight").hide();
      } else if (name == 3) {
        $("#semone").hide();
        $("#semtwo").hide();
        $("#semthree").hide();
        $("#semfour").hide();
        $("#semfive").show();
        $("#semsix").show();
        $("#semseven").hide();
        $("#semeight").hide();
      } else if (name == 4) {
        $("#semone").hide();
        $("#semtwo").hide();
        $("#semthree").hide();
        $("#semfour").hide();
        $("#semfive").hide();
        $("#semsix").hide();
        $("#semseven").show();
        $("#semeight").show();
      }


    });
    // select phase end
    // select phase for assign taecher start
    $(".year").on("change", function() {
      var name2 = $('.year option:selected').val();
      //  alert(name);
      if (name2 == 1) {
        $(".semone").show();
        $(".semtwo").show();
        $(".semthree").hide();
        $(".semfour").hide();
        $(".semfive").hide();
        $(".semsix").hide();
        $(".semseven").hide();
        $(".semeight").hide();
      } else if (name2 == 2) {
        $(".semone").hide();
        $(".semtwo").hide();
        $(".semthree").show();
        $(".semfour").show();
        $(".semfive").hide();
        $(".semsix").hide();
        $(".semseven").hide();
        $(".semeight").hide();
      } else if (name2 == 3) {
        $(".semone").hide();
        $(".semtwo").hide();
        $(".semthree").hide();
        $(".semfour").hide();
        $(".semfive").show();
        $(".semsix").show();
        $(".semseven").hide();
        $(".semeight").hide();
      } else if (name2 == 4) {
        $(".semone").hide();
        $(".semtwo").hide();
        $(".semthree").hide();
        $(".semfour").hide();
        $(".semfive").hide();
        $(".semsix").hide();
        $(".semseven").show();
        $(".semeight").show();
      }


    });
    // select phase for assign taecher end
    // select phase for students start
    $("#studentyear").on("change", function() {
      var name3 = $('#studentyear option:selected').val();
      //  alert(name);
      if (name3 == 1) {
        $(".semone").show();
        $(".semtwo").show();
        $(".semthree").hide();
        $(".semfour").hide();
        $(".semfive").hide();
        $(".semsix").hide();
        $(".semseven").hide();
        $(".semeight").hide();
      } else if (name3 == 2) {
        $(".semone").hide();
        $(".semtwo").hide();
        $(".semthree").show();
        $(".semfour").show();
        $(".semfive").hide();
        $(".semsix").hide();
        $(".semseven").hide();
        $(".semeight").hide();
      } else if (name3 == 3) {
        $(".semone").hide();
        $(".semtwo").hide();
        $(".semthree").hide();
        $(".semfour").hide();
        $(".semfive").show();
        $(".semsix").show();
        $(".semseven").hide();
        $(".semeight").hide();
      } else if (name3 == 4) {
        $(".semone").hide();
        $(".semtwo").hide();
        $(".semthree").hide();
        $(".semfour").hide();
        $(".semfive").hide();
        $(".semsix").hide();
        $(".semseven").show();
        $(".semeight").show();
      }


    });
    // select phase for students end

    // start insert city table
    $(document).on("click", "#course", function() {

      $("#subjectlist").hide();
      $("#teacherlist").hide();
      $("#subject").hide();
      $("#teacher").hide();
      $("#assign_subject").hide();
      $("#assignteacherlist").hide();
      $("#student").hide();
      $("#studentlist").hide();
      $("#loginform").show();
      $("#courselist").show();

      $('#courseadd').on("click", function() {
        var coursename = $('#coursename').val();
        if (coursename == "") {
          alert("All field is required!");
        } else {
          $.ajax({
            url: 'readcourse.php',
            type: 'post',
            data: {
              course_name: coursename
            },
            success: function(data) {
              if (data == 1) {
                $('#input').trigger("reset");
                alert("Successfully added course!!!");
                loadTable();
              } else {
                alert("Not added course!!!");
              }
            }
          });
        }
      });
    });

    // start insert city table


    // start show course table

    function loadTable() {
      $.ajax({
        url: 'displaycourse.php',
        type: 'POST',
        success: function(data) {
          $("#display").html(data);
        }
      });
    }
    loadTable();
    // start show course table

    // start delete button 
    $(document).on("click", "#delete-btn", function() {
      if (confirm("Do you want to really delete this city?")) {
        var courseId = $(this).data("id");
        var element = this;
        // alert(cityId);

        $.ajax({
          url: 'deletecourse.php',
          type: 'POST',
          data: {
            deleteid: courseId
          },
          success: function(data) {
            if (data == 1) {
              $(element).closest("tr").fadeOut();

            } else {
              alert("data can't delete");
            }
          }
        });
      }
    });
    // end delete button




    //dropdown list of course
    function loadData() {
      $.ajax({
        url: 'selectcourse.php',
        type: 'POST',
        success: function(data) {
          $(".choosecourse").append(data);
        }
      });
    }
    loadData();
    // end dropdown list of course

    // start insert subject table
    $(document).on("click", "#addsubject", function() {
      $("#loginform").hide();
      $("#courselist").hide();
      $("#assign_subject").hide();
      $("#teacher").hide();
      $("#teacherlist").hide();
      $("#assignteacherlist").hide();
      $("#student").hide();
      $("#studentlist").hide();
      $("#subject").show();
      $("#subjectlist").show();

      $('#subjectadd').on("click", function() {
        var courseid = $('.choosecourse option:selected').val();
        var year = $('#yearselected1 option:selected').text();
        var semester = $('#semester option:selected').text();
        var subjectname = $('#subjectname').val();
        var subjectcode = $('#subjectcode').val();
        // alert(year);
        if (subjectname == "" || subjectcode == "") {
          alert("All field is required!");
        } else {
          $.ajax({
            url: 'readsubject.php',
            type: 'POST',
            data: {
              course_id: courseid,
              year1: year,
              semester1: semester,
              subject_name: subjectname,
              subject_code: subjectcode
            },
            success: function(data) {
              if (data == 1) {
                $('#input').trigger("reset");
                alert("Successfully added course!!!");
                loadSubject();
              } else {
                alert("Not added course!!!");
              }
            }
          });
        }
      });
    });

    // end insert subject table

    // start show subject table

    function loadSubject() {
      $.ajax({
        url: 'displaysubject.php',
        type: 'POST',
        success: function(data) {
          $("#displaysubject").html(data);
        }
      });
    }
    loadSubject();
    // end show subject table
    // start delete SUBJECT button 
    $(document).on("click", "#delete-SUBbtn", function() {
      if (confirm("Do you want to really delete this city?")) {
        var subjectID = $(this).data("subid");
        var element = this;
        // alert(subjectID);

        $.ajax({
          url: 'deletesubject.php',
          type: 'POST',
          data: {
            deletesubid: subjectID
          },
          success: function(data) {
            if (data == 1) {
              $(element).closest("tr").fadeOut();

            } else {
              alert("data can't delete");
            }
          }
        });
      }
    });
    // end delete SUBJECT button

    // start insert teacher table
    $(document).on("click", "#addteacher", function() {
      $("#loginform").hide();
      $("#courselist").hide();
      $("#subject").hide();
      $("#subjectlist").hide();
      $("#assign_subject").hide();
      $("#assignteacherlist").hide();
      $("#student").hide();
      $("#studentlist").hide();
      $("#teacher").show();
      $("#teacherlist").show();

      $('#teacheradd').on("click", function() {
        var fisrtName = $('#teacherfirst').val();
        var lastName = $('#teacherlast').val();
        var Mail = $('#teachermail').val();
        var Password = $('#teacherpassword').val();
        // alert(Password);
        if (subjectname == "" || subjectcode == "") {
          alert("All field is required!");
        } else {
          $.ajax({
            url: 'readteacher.php',
            type: 'POST',
            data: {
              fisrtName: fisrtName,
              lastName: lastName,
              Mail: Mail,
              Password: Password
            },
            success: function(data) {
              if (data == 1) {
                $('#input').trigger("reset");
                alert("Successfully added course!!!");
                loadTeacher1();
              } else {
                alert("Not added course!!!");
              }
            }
          });
        }
      });
    });

    // end insert teachers table
    // start show teacher's table

    function loadTeacher1() {
      $.ajax({
        url: 'displayteacher.php',
        type: 'POST',
        success: function(data) {
          $("#displayteacher").html(data);
        }
      });
    }
    loadTeacher1();
    // end show teacher's table
    //dropdown list of TEACHER
    function loadTeacher2() {
      $.ajax({
        url: 'selectteacher.php',
        type: 'POST',
        success: function(data) {
          $("#teacherselected").append(data);
        }
      });
    }
    loadTeacher2();
    // end dropdown list of TEACHER

    //dropdown list of subject
    function loadSubjectselect() {
      $.ajax({
        url: 'selectsubject.php',
        type: 'POST',
        success: function(data) {
          $("#subjectselected2").append(data);
        }
      });
    }
    loadSubjectselect();
    // end dropdown list of subject

    //////////////////////////////////////////////  

    // start insert assign teacher table
    $(document).on("click", "#assignsubject", function() {
      $("#loginform").hide();
      $("#courselist").hide();
      $("#subject").hide();
      $("#subjectlist").hide();
      $("#teacher").hide();
      $("#teacherlist").hide();
      $("#student").hide();
      $("#studentlist").hide();
      $("#assign_subject").show();
      $("#assignteacherlist").show();

      $('#assignsubjectadd').on("click", function() {
        var assignteacherid = $('#teacherselected option:selected').val();
        var assigncourse = $('#assigncourse option:selected').val();
        var assignyear = $('.year option:selected').text();
        var assignsemester = $('#assignsemester option:selected').text();
        var assignsubject = $('#subjectselected2 option:selected').val();
        // var subjectcode = $('#subjectcode').val();
        // alert(assignsubject);
        if (assignteacherid == "" || assigncourse == "") {
          alert("All field is required!");
        } else {
          $.ajax({
            url: 'readassignteacher.php',
            type: 'POST',
            data: {
              assignteacherid: assignteacherid,
              assigncourse: assigncourse,
              assignyear: assignyear,
              assignsemester: assignsemester,
              assignsubject: assignsubject
            },
            success: function(data) {
              if (data == 1) {
                $('#input').trigger("reset");
                alert("Successfully added!!!");
                loadassignTeacher();
              } else {
                alert("Not added!!!");
              }
            }
          });
        }
      });
    });

    // end insert assign teachers table
    // start show assign teacher's table

    function loadassignTeacher() {
      $.ajax({
        url: 'displayassignteacher.php',
        type: 'POST',
        success: function(data) {
          $("#displayassignteacher").html(data);
        }
      });
    }
    loadassignTeacher();
    // end show assign teacher's table

    // start insert students table
    $(document).on("click", "#addstudent", function() {
      $("#loginform").hide();
      $("#courselist").hide();
      $("#subject").hide();
      $("#subjectlist").hide();
      $("#teacher").hide();
      $("#teacherlist").hide();
      $("#assign_subject").hide();
      $("#assignteacherlist").hide();
      $("#student").show();
      $("#studentlist").show();

      $('#studentbutton').on("click", function() {
        var studentfirst = $('#studentfirst').val();
        var studentlast = $('#studentlast').val();
        var studentroll = $('#studentroll').val();
        var studentmail = $('#studentmail').val();
        var studentcourse = $('#studentcourse option:selected').val();
        var studentyear = $('#studentyear option:selected').text();
        var studentsemester = $('#studentsemester option:selected').text();
        // alert(studentsemester);
        if (studentfirst == "" || studentlast == "") {
          alert("All field is required!");
        } else {
          $.ajax({
            url: 'readstudent.php',
            type: 'POST',
            data: {
              studentfirst: studentfirst,
              studentlast: studentlast,
              studentroll: studentroll,
              studentmail: studentmail,
              studentcourse: studentcourse,
              studentyear: studentyear,
              studentsemester: studentsemester
            },
            success: function(data) {
              if (data == 1) {
                $('#input').trigger("reset");
                alert("Successfully added!!!");
                loadStudent();
              } else {
                alert("Not added!!!");
              }
            }
          });
        }
      });
    });

    // end insert students table
    // start show  students table

    function loadStudent() {
      $.ajax({
        url: 'displaystudent.php',
        type: 'POST',
        success: function(data) {
          $("#displaystudent").html(data);
        }
      });
    }
    loadStudent();
    // end show students table

    // start delete teacher button 
    $(document).on("click", "#delete-TEACHbtn", function() {
      if (confirm("Do you want to really delete this city?")) {
        var teacherID = $(this).data("teachid");
        var element = this;
        // alert(subjectID);

        $.ajax({
          url: 'deleteteacher.php',
          type: 'POST',
          data: {
            teacherID: teacherID
          },
          success: function(data) {
            if (data == 1) {
              $(element).closest("tr").fadeOut();

            } else {
              alert("data can't delete");
            }
          }
        });
      }
    });
    // end delete TEACHER button

    // start delete ASSIGN TEACHER button 
    $(document).on("click", "#delete-ASSIGNbtn", function() {
      if (confirm("Do you want to really delete this city?")) {
        var assignteacherID = $(this).data("assignid");
        var element = this;
        // alert(subjectID);

        $.ajax({
          url: 'deleteassignteacher.php',
          type: 'POST',
          data: {
            assignteacherID: assignteacherID
          },
          success: function(data) {
            if (data == 1) {
              $(element).closest("tr").fadeOut();

            } else {
              alert("data can't delete");
            }
          }
        });
      }
    });
    // end delete ASSIGN TEACHER button

    // start delete STUDENTS button 
    $(document).on("click", "#delete-STUbtn", function() {
      if (confirm("Do you want to really delete this city?")) {
        var studentID = $(this).data("stuid");
        var element = this;
        // alert(subjectID);

        $.ajax({
          url: 'deletestudent.php',
          type: 'POST',
          data: {
            studentID: studentID
          },
          success: function(data) {
            if (data == 1) {
              $(element).closest("tr").fadeOut();

            } else {
              alert("data can't delete");
            }
          }
        });
      }
    });
    // end delete STUDENTS button

     // start show modal for course
     $(document).on("click", "#cedit-btn", function () {
        $("#modal").show();

        var editid = $(this).data("ceid");
        // alert(editid);

        $.ajax({
          url: 'Editcourse.php',
          type: 'POST',
          data: { edit_id: editid },
          success: function (data) {
            $("#modal-form table").html(data);
          }
        });
      });


      $(document).on("click", "#update-cbtn",function(){
        var editId = $("#cedit-id").val();
        var editcourseid = $("#courseed").val(); 
        $.ajax({
          url: 'updatecourse.php',
          type: 'POST',
          data: {id:editId, course_name:editcourseid},
          success:function(data){
            if(data == 1){
              $("#modal").hide();
              loadTable();
              alert("Successfully Updated!!");
            }else{
              alert("Not updated");
            }
          }
        });
      });
       // end show modal for course

       //start modal close
       $("#close-btn1").on("click", function () {
        $("#modal").hide();
      });
       //end modal close



  });