<?php

    $con = mysqli_connect("localhost","root","","smart_education");
	
	//show country list
    $sql1="SELECT * FROM sm_countries";
    $result1=mysqli_query($con, $sql1);
    $select = "-Select One-";
	

    if(mysqli_num_rows($result1)){
        $select_country1= '<select id ="country_list1" name="country_list1" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select_country1.= '<option value=""></option>';
    while($rs = mysqli_fetch_assoc($result1)){
      $select_country1.='<option value="'.$rs['id'].'">'.$rs['country_name'].'</option>';
        }
    }
    $select_country1.='</select>';

    //show country list for professional for row 1
    $sql2 = "SELECT * FROM sm_countries";
    $result2 = mysqli_query($con,$sql2);

    if(mysqli_num_rows($result2)){
        $select_country2= '<select id ="country_row0" name="country_row[0]" class="form-control form-control-sm" style="height: 37px;font-size:16px;margin-bottom: 9px;width: 150px;margin-top: 7px;">';
        $select_country2.= '<option value=""></option>';
    while($rs2 = mysqli_fetch_assoc($result2)){
      $select_country2.='<option value="'.$rs2['id'].'">'.$rs2['country_name'].'</option>';
        }
    }
    $select_country2.='</select>';

    //show country list for professional for row 2
    $sql9 = "SELECT * FROM sm_countries";
    $result9 = mysqli_query($con,$sql9);

    if(mysqli_num_rows($result9)){
        $select_country9= '<select id ="country_row1" name="country_row[1]" class="form-control form-control-sm" style="height: 37px;font-size:16px;margin-bottom: 9px;width: 150px;margin-top: 7px;margin-left: 97px;">';
        $select_country9.= '<option value=""></option>';
    while($rs9 = mysqli_fetch_assoc($result9)){
      $select_country9.='<option value="'.$rs9['id'].'">'.$rs9['country_name'].'</option>';
        }
    }
    $select_country9.='</select>';

    //show country list for professional for row 3
    $sql12 = "SELECT * FROM sm_countries";
    $result12 = mysqli_query($con,$sql12);

    if(mysqli_num_rows($result12)){
        $select_country12= '<select id ="country_row2" name="country_row[2]" class="form-control form-control-sm" style="height: 37px;font-size:16px;margin-bottom: 9px;width: 150px;margin-top: 7px;margin-left: 97px;">';
        $select_country12.= '<option value=""></option>';
    while($rs12 = mysqli_fetch_assoc($result12)){
      $select_country12.='<option value="'.$rs12['id'].'">'.$rs12['country_name'].'</option>';
        }
    }
    $select_country12.='</select>';

    //show professional qualification list for row 1
    $sql3 = "SELECT pro_name,pro_id FROM sm_professional";
    $result3 = mysqli_query($con,$sql3);
    if(mysqli_num_rows($result3)){
        $select3 = '<select id="prof_row0" name="prof_row[0]" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select3.= '<option value=""></option>';
    while($rs3 = mysqli_fetch_assoc($result3)){
        $select3.='<option value="'.$rs3['pro_id'].'">'.$rs3['pro_name'].'</option>';
    }
    }
    $select3.='</select>';

    //show professional qualification list for row 2
    $sql7 = "SELECT pro_name,pro_id FROM sm_professional";
    $result7 = mysqli_query($con,$sql7);
    if(mysqli_num_rows($result7)){
        $select7 = '<select id="prof_row1" name="prof_row[1]" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select7.= '<option value=""></option>';
    while($rs7 = mysqli_fetch_assoc($result7)){
        $select7.='<option value="'.$rs7['pro_id'].'">'.$rs7['pro_name'].'</option>';
    }
    }
    $select7.='</select>';

    //show professional qualification list for row 3
    $sql10 = "SELECT pro_name,pro_id FROM sm_professional";
    $result10 = mysqli_query($con,$sql10);
    if(mysqli_num_rows($result10)){
        $select10 = '<select id="prof_row2" name="prof_row[2]" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select10.= '<option value=""></option>';
    while($rs10 = mysqli_fetch_assoc($result10)){
        $select10.='<option value="'.$rs10['pro_id'].'">'.$rs10['pro_name'].'</option>';
    }
    }
    $select10.='</select>';

    //show grade list for row 1
    $sql4 = "SELECT grade_name,grade_id FROM sm_grade";
    $result4 = mysqli_query($con,$sql4);
    if(mysqli_num_rows($result4)){
        $select4 = '<select id="grade_list_row0" name="grade_list_row[0]" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select4.= '<option value=""></option>';
    while($rs4 = mysqli_fetch_assoc($result4)){
        $select4.='<option value="'.$rs4['grade_id'].'">'.$rs4['grade_name'].'</option>';
    }
    }
    $select4.='</select>';

    //show grade list for row 2
    $sql8 = "SELECT grade_name,grade_id FROM sm_grade";
    $result8 = mysqli_query($con,$sql8);
    if(mysqli_num_rows($result8)){
        $select8 = '<select id="grade_list_row1" name="grade_list_row[1]" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select8.= '<option value=""></option>';
    while($rs8 = mysqli_fetch_assoc($result8)){
        $select8.='<option value="'.$rs8['grade_id'].'">'.$rs8['grade_name'].'</option>';
    }
    }
    $select8.='</select>';

    //show grade list for row 3
    $sql11 = "SELECT grade_name,grade_id FROM sm_grade";
    $result11 = mysqli_query($con,$sql11);
    if(mysqli_num_rows($result11)){
        $select11 = '<select id="grade_list_row2" name="grade_list_row[2]" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
        $select11.= '<option value=""></option>';
    while($rs11 = mysqli_fetch_assoc($result11)){
        $select11.='<option value="'.$rs11['grade_id'].'">'.$rs11['grade_name'].'</option>';
    }
    }
    $select11.='</select>';

    //show expertise subject list
    $sql5 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result5 = mysqli_query($con,$sql5);
    if(mysqli_num_rows($result5)){
        $select5 = '<select id="expert_sub_list" name="expert_sub_list" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px;">';
        $select5.= '<option value=""></option>';
    while($rs5 = mysqli_fetch_assoc($result5)){
        $select5.='<option value="'.$rs5['sub_id'].'">'.$rs5['sub_name'].'</option>';
    }
    }
    $select5.='</select>';

    //show professional qualification list(2)
    $sql6 = "SELECT pro_name,pro_id FROM sm_professional";
    $result6 = mysqli_query($con,$sql6);
    if(mysqli_num_rows($result6)){
        $select6 = '<select id="courses" name="courses" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px; display:none;">';
        $select6.= '<option value=""></option>';
    while($rs6 = mysqli_fetch_assoc($result6)){
        $select6.='<option value="'.$rs6['pro_name'].'">'.$rs6['pro_name'].'</option>';
    }
    }
    $select6.='</select>';

    //get content provider id
    $get_id = "SELECT MAX(individual_id) AS count FROM sm_cp_individual";
    $result = mysqli_query($con,$get_id);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    $count_new = $count+1;
    $cp_id = 'Con-000'.$count_new;
    echo $cp_id;

    //get institute content provider id
    $get_inst_id = "SELECT MAX(institute_id) AS count_inst FROM sm_cp_institute";
    $result_inst = mysqli_query($con,$get_inst_id);
    $row_inst = mysqli_fetch_assoc($result_inst);
    $count_inst = $row_inst['count_inst'];
    $count_inst_new = $count_inst+1;
    $cp_inst_id = 'Inst-000'.$count_inst_new;
    echo $cp_inst_id;

    //get expertise subject list for individual form

    //first expertise subject list
    $sql_subject1 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result_subject1 = mysqli_query($con,$sql_subject1);
    if(mysqli_num_rows($result_subject1)){
        $select_subject1 = '<select id="expert_subject1" name="expert_subject1" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px;">';
        $select_subject1.='<option value=""></option>';
    while($rs_subject1 = mysqli_fetch_assoc($result_subject1)){
        $select_subject1.='<option value="'.$rs_subject1['sub_id'].'">'.$rs_subject1['sub_name'].'</option>';
    }
    }
    $select_subject1.='</select>';

    //second expertise subject list
    $sql_subject2 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result_subject2 = mysqli_query($con,$sql_subject2);
    if(mysqli_num_rows($result_subject2)){
        $select_subject2 = '<select id="expert_subject2" name="expert_subject2" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px; display:none;">';
        $select_subject2.='<option value=""></option>';
    while($rs_subject2 = mysqli_fetch_assoc($result_subject2)){
        $select_subject2.='<option value="'.$rs_subject2['sub_id'].'">'.$rs_subject2['sub_name'].'</option>';
    }
    }
    $select_subject2.='</select>';

    //third expertise subject list
    $sql_subject3 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result_subject3 = mysqli_query($con,$sql_subject3);
    if(mysqli_num_rows($result_subject3)){
        $select_subject3 = '<select id="expert_subject3" name="expert_subject3" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px; display:none;">';
        $select_subject3.='<option value=""></option>';
    while($rs_subject3 = mysqli_fetch_assoc($result_subject3)){
        $select_subject3.='<option value="'.$rs_subject3['sub_id'].'">'.$rs_subject3['sub_name'].'</option>';
    }
    }
    $select_subject3.='</select>';

    //get expertise subject list for institute form

    //first expertise subject list
    $sql_sub1 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result_sub1 = mysqli_query($con,$sql_sub1);
    if(mysqli_num_rows($result_sub1)){
        $select_sub1 = '<select id="expert_sub1" name="expert_sub1" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px;">';
        $select_sub1.='<option value=""></option>';
    while($rs_sub1 = mysqli_fetch_assoc($result_sub1)){
        $select_sub1.='<option value="'.$rs_sub1['sub_id'].'">'.$rs_sub1['sub_name'].'</option>';
    }
    }
    $select_sub1.='</select>';

    //second expertise subject list
    $sql_sub2 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result_sub2 = mysqli_query($con,$sql_sub2);
    if(mysqli_num_rows($result_sub2)){
        $select_sub2 = '<select id="expert_sub2" name="expert_sub2" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px; display:none;">';
        $select_sub2.='<option value=""></option>';
    while($rs_sub2 = mysqli_fetch_assoc($result_sub2)){
        $select_sub2.='<option value="'.$rs_sub2['sub_id'].'">'.$rs_sub2['sub_name'].'</option>';
    }
    }
    $select_sub2.='</select>';

    //third expertise subject list
    $sql_sub3 = "SELECT sub_id,sub_name FROM sm_expertise_subject";
    $result_sub3 = mysqli_query($con,$sql_sub3);
    if(mysqli_num_rows($result_sub3)){
        $select_sub3 = '<select id="expert_sub3" name="expert_sub3" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px; display:none;">';
        $select_sub3.='<option value=""></option>';
    while($rs_sub3 = mysqli_fetch_assoc($result_sub3)){
        $select_sub3.='<option value="'.$rs_sub3['sub_id'].'">'.$rs_sub3['sub_name'].'</option>';
    }
    }
    $select_sub3.='</select>';
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <link href="css/home-style.css" rel="stylesheet">

    <script src="js/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script src="../js/jquery-3.2.1.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
    <script src="js/form_validation.js"></script>

    <script>
        //function for educational instution radio button
       $(document).ready(function () {
        $("#radio-btn2").click(function(){
            $("#professional-category").slideDown(1000);
        });
        $("#radio-btn2").click(function(){
            $("#individual-category").slideUp(1000);
        });
        $("#radio-btn2").click(function(){
            $("#radioB1").css("background-color","white");
        });
        $("#radio-btn2").click(function(){
            $("#radioB2").css("background-color","#D0F5A9");
        });
       });

       //function for individual
       $(document).ready(function () {
        $("#radio-btn1").click(function(){
            $("#professional-category").slideUp(1000);
        });
        $("#radio-btn1").click(function(){
            $("#individual-category").slideDown(1000);
        });
        $("#radio-btn1").click(function(){
            $("#radioB1").css("background-color","#F2F5A9");
        });
        $("#radio-btn1").click(function(){
            $("#radioB2").css("background-color","white");
        });
        
       });

       //show remove btn
       $(document).ready(function () {
        $("#add-btn").click(function(){
            $("#remove-btn").show();
        });
       });

       //show courses drop down list
       $(document).ready(function () {
        $("#radio-btn3").click(function(){
            $("#courses").show();
        });
       });

       //hide courses drop down list
       $(document).ready(function () {
        $("#radio-btn4").click(function(){
            $("#courses").hide();
            $("#courses").val("");
            $("#other-details").val("");
        });
       });

       //hide other input field
       $(document).ready(function () {
        $("#radio-btn4").click(function(){
            $("#other-field").hide();
            $("#other-details").val("");
        });
       });

       $(function () {
        $("#courses").change(function () {
            if ($(this).val() == "Other") {
                $("#other-field").show();
            } else {
                $("#other-field").hide();
            }
        });
        });

        //get only cp individual phone numbers as the input
        function phoneno(){          
            $('#cpMobile').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }

        //get only institute phone numbers as the input
        function phoneno1(){          
            $('#mobileNum').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }

        //get only institute person phone numbers as the input
        function phoneno2(){          
            $('#person_no').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }

        //handle expertise subjects in institute form
        $(document).ready(function () {
        $("#add_sub_btn1").click(function(){
            $("#add_sub_btn1").hide();
            $("#expert_sub2").show();
            $("#add_sub_btn2").show();
            $("#remove_sub_btn2").show();
        });
        });

        $(document).ready(function () {
        $("#add_sub_btn2").click(function(){
            $("#add_sub_btn2").hide();
            $("#expert_sub3").show();
            $("#add_sub_btn3").hide();
            $("#remove_sub_btn3").show();
        });
       });

       $(document).ready(function () {
        $("#remove_sub_btn2").click(function(){
            $("#expert_sub2").val("");
            $("#expert_sub2").hide();
            $("#remove_sub_btn2").hide();
            $("#add_sub_btn2").hide();
            $("#add_sub_btn1").show();
        });
       });

       $(document).ready(function () {
        $("#remove_sub_btn3").click(function(){
            $("#expert_sub3").val("");
            $("#expert_sub3").hide();
            $("#remove_sub_btn3").hide();
            $("#add_sub_btn1").show();
        });
       });

       //handle expertise subjects in individual form
       $(document).ready(function () {
        $("#add_subject_btn1").click(function(){
            $("#add_subject_btn1").hide();
            $("#expert_subject2").show();
            $("#add_subject_btn2").show();
            $("#remove_subject_btn2").show();
        });
        });

        $(document).ready(function () {
        $("#add_subject_btn2").click(function(){
            $("#add_subject_btn2").hide();
            $("#expert_subject3").show();
            $("#add_subject_btn3").hide();
            $("#remove_subject_btn3").show();
        });
       });

       $(document).ready(function () {
        $("#remove_subject_btn2").click(function(){
            $("#expert_subject2").val("");
            $("#expert_subject2").hide();
            $("#remove_subject_btn2").hide();
            $("#add_subject_btn2").hide();
            $("#add_subject_btn1").show();
        });
       });

       $(document).ready(function () {
        $("#remove_subject_btn3").click(function(){
            $("#expert_subject3").val("");
            $("#expert_subject3").hide();
            $("#remove_subject_btn3").hide();
            $("#add_subject_btn1").show();
        });
       });

       //handle professional qualification rows

       //row1 add btn
       $(document).ready(function(){
        $("#add_btn_row1").click(function(){
            $("#row_2").show();
            $("#add_btn_row1").hide();
            $("#add_btn_row2").show();
        });
       });

       //row2 add btn
       $(document).ready(function(){
        $("#add_btn_row2").click(function(){
            $("#row_3").show();
            $("#add_btn_row2").hide();
            
        });
       });

       //row2 remove btn
       $(document).ready(function(){
           $("#remove_btn_row2").click(function(){
               $("#prof_row[1]").val("");
               $("#row_2").hide();
               $("#add_btn_row1").show();
               
               $("#prof_row1").val("");
               $("#uniName_row1").val("");
               $("#grade_list_row1").val("");
               $("#year_row1").val("");
               $("#country_row1").val("");
           });
       });

       //row3 remove btn
       $(document).ready(function(){
           $("#remove_btn_row3").click(function(){
               $("#row_3").hide();
               $("#add_btn_row2").show();

               $("#prof_row2").val("");
               $("#uniName_row2").val("");
               $("#grade_list_row2").val("");
               $("#year_row2").val("");
               $("#country_row2").val("");
           });
       });
        
</script>
<script type="text/javascript">
        
        //add subject area expertise drop downs
        $(document).ready(function(){
            $("#add_btn1").click(function(){
                $("#drop1").append('<?php 
                    $id = 2;
                    $sql8 = 'SELECT sub_id,sub_name FROM sm_expertise_subject';
                    $result8 = mysqli_query($con,$sql8);
                    if(mysqli_num_rows($result8)){
                        echo '<select id="subject_list'.$id.'" name="subject_list'.$id.'" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 0px;">';
                    while($rs8 = mysqli_fetch_assoc($result8)){
                        echo '<option value="'.$rs8['sub_id'].'">'.$rs8['sub_name'].'</option>';
                    }
                    }
                    echo '</select>';
                    $id++;
                    ?>');
            });
</script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row" id="outline">
                
                <div class="col-md-12 col-lg-12 col-12" id="title">
                    <h3 style="margin-top: 0px;margin-bottom: 0px;padding-top: 10px;padding-bottom: 10px;">Content Provider Registration Screen</h3>
                    <!--<button id="close-btn" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                </div>
                
                <div id="selection-row" class="row">
                    <div class="col-md-4">
                        <h4 id="specify">Specify whether content provider is,</h4>
                    </div>
                    <div id="radioB1" class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="radio-btn" id="radio-btn1" value="radio-btn1" checked>
                                    An Individual
                            </label>
                        </div>
                    </div>
                    <div id="radioB2" class="col-md-5">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="radio-btn" id="radio-btn2" value="radio-btn2">
                                        Educational Institution / Professional body
                                </label>
                            </div>
                        </div>
                </div>

                <form id="form1" method="POST" action="../model/insertCppersonalDetail.php">
                <div class="row" id="individual-category"><!--individual form-->
                    <div class="row">
                    <h4><br>&emsp;If Individual,</h4><br>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="cpName" name="cpName" class="form-control form-control-sm" type="text" placeholder="Full Name:">
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="cpFullName" name="cpFullName" class="form-control form-control-sm" type="text" placeholder="Name with Initials:">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <select id="gender" name="gender" class="form-control form-control-sm" style="height: 34px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">
                                <option value="">Gender</option>    
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="cpNic" name="cpNic" class="form-control form-control-sm" type="text" placeholder="N.I.C:">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="cpDesignation" name="cpDesignation" class="form-control form-control-sm" type="text" placeholder="Designation:">
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                        <div class="row">
                                <div class="col-sm-6 col-6 col-md-5" style="top: 15px;right: 4px;">
                                    Date of birth:
                                </div>
                                <div class="col-sm-6 col-6 col-md-7">
                                <input type="text" id="cpDob" name="cpDob" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <input type="text" id="cpEmail" name="cpEmail" class="form-control form-control-sm" type="text" placeholder="Email:">
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="cpMobile" name="cpMobile" class="form-control form-control-sm" type="text" placeholder="Contact No:" onkeydown="phoneno()" maxlength="10" />
                        </div>
                    </div>
                </div>
       
                    <div class="row"><!--Highest education qualification-->
                            <br><h4>&emsp;Highest education level achieved,</h4><br>
                            
                            <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;width: 315px;">
                                <table class="table table-bordered">
                                    <tr><td align="center">Qualification achieved</td></tr>
                                    <tr><td>
                                        <input id="highest_quali" name="highest_quali" class="form-control form-control-sm" type="text">
                                    </td></tr>
                                </table>
                            </div>

                            <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
                                <table class="table table-bordered">
                                    <tr><td align="center">University / Institute</td></tr>
                                    <tr><td>
                                        <input id="highest_uni" name="highest_uni" class="form-control form-control-sm" type="text">
                                    </td></tr>
                                </table>
                            </div>

                            <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                                <table class="table table-bordered">
                                    <tr><td align="center">Grade recieved</td></tr>
                                    <tr><td>
                                        <input id="highest_grade" name="highest_grade" class="form-control form-control-sm" type="text">
                                    </td></tr>
                                </table>
                            </div>

                            <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                                <table class="table table-bordered">
                                    <tr><td align="center">Country</td></tr>
                                    <tr><td><!--<input name="highest_country" id="highest_country" class="form-control form-control-sm" type="text" style="margin-bottom: 10px;">-->
                                <?php echo $select_country1; ?>
                                </td></tr>
                                </table>
                            </div>
                            <div class="col-md-1" style="padding-left: 0px;margin-right: 0px;right: 2px;left: -2px;">
                                    <table class="table table-bordered">
                                        <tr><td align="center" style="padding-top: 10px;padding-bottom: 6px;">Year of completion</td></tr>
                                        <tr><td>
                                        <?php
                                        //drop down year list for highest education
                                        $selected = "";
                                        echo '<select name="highest_year" id="highest_year" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
                                        $cur_year = date('Y');
                                        echo '<option value="" selected="selected"></option>';
                                        for($year = ($cur_year-25); $year <= ($cur_year); $year++) {
                                            if ($year == $cur_year) {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            } else {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            }
                                        }               
                                        echo '</select>';
                                    ?>
                                        </td></tr>
                                    </table>
                                </div>
                    </div>

                    <div class="row"><!--Professional qualification-->
                        <br><h4>&emsp;Professional qualification details,</h4><br>
                        <div id="row_1" class="row">
                            <div class="col-md-2">
                                <div class="row">
                                    Qualification achieved
                                </div>
                                <div class="row">
                                    <?php echo $select3; ?>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    University / Institute
                                </div>
                                <div class="row">
                                    <input id="uniName_row0" name="uniName_row[0]" class="form-control form-control-sm" type="text">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    Grade recieved
                                </div>
                                <div class="row">
                                    <?php echo $select4; ?>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    Year of completion
                                </div>
                                <div class="row">
                                    <?php
                                        //drop down year list for highest education
                                        echo '<select name="year_row[0]" id="year_row0" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
                                        $cur_year = date('Y');
                                        echo '<option value="" selected="selected"></option>';
                                        for($year = ($cur_year-25); $year <= ($cur_year); $year++) {
                                            if ($year == $cur_year) {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            } else {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            }
                                        }               
                                        echo '</select>';
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    Country
                                </div>
                                <div class="row">
                                    <?php echo $select_country2; ?>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    <button id="add_btn_row1" type="button" class="btn btn-info" style="margin-top: 28px;"><span class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div>

                        <!--second row-->
                        <div id="row_2" class="row" style="display:none;">
                            <div class="col-md-2">
                                <div class="row">
                                    <?php echo $select7; ?>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <input id="uniName_row1" name="uniName_row[1]" class="form-control form-control-sm" type="text">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    <?php echo $select8; ?>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="row">
                                    <?php
                                        //drop down year list for highest education
                                        echo '<select name="year_row[1]" id="year_row1" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
                                        $cur_year = date('Y');
                                        echo '<option value="" selected="selected"></option>';
                                        for($year = ($cur_year-25); $year <= ($cur_year); $year++) {
                                            if ($year == $cur_year) {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            } else {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            }
                                        }               
                                        echo '</select>';
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    <?php echo $select_country9; ?>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row" style="margin-left: 71px;">
                                    <p><button id="remove_btn_row2" type="button" class="btn btn-info" style="margin-top: 11px;"><span class="glyphicon glyphicon-minus"></span></button>
                                    <button id="add_btn_row2" type="button" class="btn btn-info" style="margin-top: 11px;"><span class="glyphicon glyphicon-plus"></span></button></p>
                                </div>
                            </div>
                        </div>

                        <!--third row-->
                        <div id="row_3" class="row" style="display:none;">
                            <div class="col-md-2">
                                <div class="row">
                                    <?php echo $select10; ?>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <input id="uniName_row2" name="uniName_row[2]" class="form-control form-control-sm" type="text">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    <?php echo $select11; ?>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="row">
                                    <?php
                                        //drop down year list for highest education
                                        echo '<select name="year_row[2]" id="year_row2" class="form-control form-control-sm" style="height: 37px;font-size:16px;width: 30%;margin-bottom: 9px;width: 149px;margin-top: 7px;">';
                                        $cur_year = date('Y');
                                        echo '<option value="" selected="selected"></option>';
                                        for($year = ($cur_year-25); $year <= ($cur_year); $year++) {
                                            if ($year == $cur_year) {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            } else {
                                                echo '<option value="'.$year.'">'.$year.'</option>';
                                            }
                                        }               
                                        echo '</select>';
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    <?php echo $select_country12; ?>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row" style="margin-left: 71px;">
                                    <p><button id="remove_btn_row3" type="button" class="btn btn-info" style="margin-top: 11px;"><span class="glyphicon glyphicon-minus"></span></button>
                                    <!--<button id="add_btn_row3" type="button" class="btn btn-info" style="margin-top: 11px;"><span class="glyphicon glyphicon-plus"></span></button></p>-->
                                </div>
                            </div>
                        </div>

                    </div>
                    

                    
                    <!--expertise subject-->
                    <div class="row"><!--Subject fo areas expertise-->
                    <br>
                    <div class="col-md-3">
                        <h5>&emsp;Subject Area of Expertise: </h5>
                    </div>
                    <div class="col-md-3">
                        <?php echo $select_subject1; ?><button id="add_subject_btn1" type="button" class="btn btn-info" style="margin-top: 0px;"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                    <div class="col-md-3">
                        <?php echo $select_subject2; ?><button id="add_subject_btn2" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-plus"></span></button>
                        <button name="remove_subject_btn2" id="remove_subject_btn2" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-minus"></span></button>
                    </div>
                    <div class="col-md-3">
                        <?php echo $select_subject3; ?><button id="add_subject_btn3" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-plus"></span></button>
                        <button name="remove_subject_btn3" id="remove_subject_btn3" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-minus"></span></button>
                    </div>
                    </div>

                    <br>
                    <div class="row"><!--Area you representing an institute / Professional body-->
                        <div class="col-6 col-lg-6 col-sm-12">
                            <h5>&emsp;Area you representing an institute / Professional body: </h5>
                        </div>
                        <div class="col-2 col-lg-2 col-sm-6" style="margin-top: 6px;">
                                <span>&emsp;&emsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="radio-btn3" value="1" id="radio-btn3">  
                        </div>
                        <div class="col-2 col-lg-2 col-sm-6" style="margin-top: 6px;">
                                <span>&emsp;&emsp;No</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="radio-btn3" value="0" id="radio-btn4" checked>
                        </div>
                        <div class="col-2 col-lg-2 col-sm-12">
                            <?php echo $select6; ?>
                        </div>
                    </div>

                    <div class="row" id="other-field" style="display:none;">
                        <div class="col-md-4" style="margin-top: 7px;">
                            <h5>&emsp;If other, please specify:</h5>
                        </div>
                        <div class="col-md-3">
                                <input id="other-details" name="other-details" class="form-control form-control-sm" type="text">
                        </div>
                    </div>
                
                

                    <div class="row"><!--Content Provider Identification No:-->
                        <div class="col-md-4" style="margin-top: 7px;">
                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;Content Provider Identification No:</h5>
                        </div>
                        <div class="col-md-3">
                                <input name="cpId" id="cpId" class="form-control form-control-sm" type="text" value="<?php echo $cp_id; ?>" readonly><br>
                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>

                    <div class="row"><!--Terms &amp; conditions-->
                        <div class="col-12 col-lg-12 col-sm-12">
                            <textarea id="terms" name="terms" class="form-control" id="exampleFormControlTextarea1" style="padding-bottom: 14px;" rows="5" col="1" placeholder="Terms &amp; Conditions" readonly></textarea>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12 col-sm-12">
                                &nbsp;<input type="checkbox" id="check1" name="check1" class="form-check-input"><span>&nbsp;&nbsp;&nbsp;I hereby acknowledge that I have read and agree to the above terms and conditions</span>
                                <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col align-right-end" style="float:right;margin-right: 51px;margin-top: 35px;margin-bottom: 15px;">
                            <input type="text" id="count_new" name="count_new" value="<?php echo $count_new; ?>" style="display:none;">
                            <button type="submit" id="cancel1" name="cancel1" class="btn btn-primary">Cancel</button>&nbsp;&nbsp;&nbsp;
                            <button type="submit" id="submit1" name="submit1" class="btn btn-primary">Submit</button><br><br><br><br>
                        </div>
                    </div>
                    
                    
                </div><!--end of individual form-->
				</form>
                

                <div class="row" id="professional-category" style="display:none;"><!--professsional form-->
				<form id="form2" method="POST" action="../model/insertInstituteDetails.php">
                <div class="row">
                    <h4><br>&nbsp;&nbsp;&nbsp;&nbsp;If Educational Institution / Professional body,</h4>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="instName" name="instName" class="form-control form-control-sm" type="text" placeholder="Name of the Educational Institution / Professional Body:">
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="regNo" name="regNo" class="form-control form-control-sm" type="text" placeholder="Business Registration No:">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-6 col-md-5" style="top: 15px;right: 4px;">
                                    Date of Registration:
                                </div>
                                <div class="col-sm-6 col-6 col-md-7">
                                <input type="text" id="dateOfReg" name="dateOfReg" class="form-control form-control-sm" placeholder="Date of Registration:">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="adrz" name="adrz" class="form-control form-control-sm" type="text" placeholder="Business Address:">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="mobileNum" name="mobileNum" class="form-control form-control-sm" type="text" placeholder="Contact No:" onkeydown="phoneno1()" maxlength="10" />
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="person_no" name="person_no" class="form-control form-control-sm" type="text" placeholder="Contact Person No:" onkeydown="phoneno2()" maxlength="10" />
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="foreignUni" name="foreignUni" class="form-control form-control-sm" type="text" placeholder="Affiliated Foreign Universities:">
                        </div>
                        <div class="col-sm-12 col-6 col-md-6">
                            <input id="instId" name="instId" class="form-control form-control-sm" type="text" value="<?php echo $cp_inst_id; ?>" readonly>
                            <br><br>
                        </div>
                    </div>
                </div>

                <!--expertise subject-->
                <div class="row"><!--Subject fo areas expertise-->
                        <br>
                        <div class="col-md-3">
                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;Subject Area of Expertise: </h5>
                        </div>
                        <div class="col-md-3">
                            <?php echo $select_sub1; ?><button id="add_sub_btn1" type="button" class="btn btn-info" style="margin-top: 0px;"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                        <div class="col-md-3">
                            <?php echo $select_sub2; ?><button id="add_sub_btn2" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-plus"></span></button>
                            <button name="remove_sub_btn2" id="remove_sub_btn2" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-minus"></span></button>
                        </div>
                        <div class="col-md-3">
                            <?php echo $select_sub3; ?><button id="add_sub_btn3" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-plus"></span></button>
                            <button name="remove_sub_btn3" id="remove_sub_btn3" type="button" class="btn btn-info" style="margin-top: 0px; display:none;"><span class="glyphicon glyphicon-minus"></span></button>
                        </div>
                        </div>
						<br>
                

                <script type="text/javascript">
                    $(function(){
                        $('#')
                    });
                </script>
                
                <div class="row"><!--Terms &amp; conditions-->
                    <div class="col-12 col-lg-12 col-sm-12">
                        <textarea id="textarea" class="form-control" id="exampleFormControlTextarea1" style="padding-bottom: 14px;" rows="5" col="1" placeholder="Terms &amp; Conditions"></textarea>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-sm-12">
                            &nbsp;<input type="checkbox" id="check2" name="check2" class="form-check-input"><span>&nbsp;&nbsp;&nbsp;I hereby acknowledge that I have read and agree to the above terms and conditions</span>
                            <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col align-right-end" style="float:right;margin-right: 51px;margin-top: 35px;margin-bottom: 15px;">
                        <input type="text" name="id2" id="id2" value="<?php echo $count_inst_new; ?>" style="display:none">
                        <button type="submit" class="btn btn-primary">Cancel</button>&nbsp;&nbsp;&nbsp;
                        <button type="submit" id="submit2" name="submit2" class="btn btn-primary">Submit</button><br><br><br><br>
                    </div>
                </div>
				</form>
                </div><!--end of individual form-->
            </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
  
	 <!--validate date of birth-->
    <script>
        $( function() {
            $( "#cpDob" ).datepicker({
            dateFormat: 'yy-mm-dd'
            });
        });
    </script>

    <!--validate date of registration-->
    <script>
        $( function() {
            $( "#dateOfReg" ).datepicker({
            dateFormat: 'yy-mm-dd'
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
	
</body>

</html>
