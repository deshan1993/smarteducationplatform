<?php

    $con = mysqli_connect("localhost","root","","smart_education");
    $date = date("Y-m-d H:m:s");
    //echo $date;
    $cp_id = $_POST['count_new'];
   

    //get data for fill personal detail table
    $cpName = $_POST['cpName'];
    $cpFullName = $_POST['cpFullName'];
    $gender = $_POST['gender'];
    $cpNic = $_POST['cpNic'];
    $cpDesignation = $_POST['cpDesignation'];
    $cpDob = $_POST['cpDob'];
    $cpEmail = $_POST['cpEmail'];
    $cpMobile = $_POST['cpMobile'];
    $institute = $_POST['radio-btn3'];

    //get data for fill highest educational qualification
    $highest_quali=$_POST['highest_quali'];
    $highest_uni = $_POST['highest_uni'];
    $highest_grade = $_POST['highest_grade'];
    $country_list1 = $_POST['country_list1'];
    $highest_year = $_POST['highest_year'];

    //get expertise subject details
    $expert_subject1 = $_POST['expert_subject1'];
    $expert_subject2 = $_POST['expert_subject2'];
    $expert_subject3 = $_POST['expert_subject3'];
    $subject = array($expert_subject1,$expert_subject2,$expert_subject3); //get expert subject into array

    //get represent institute details
    $courses = $_POST['courses'];
    $other_details = $_POST['other-details'];

    //get professional qualification details
    $professional_array = $_POST['prof_row'];
    $uniName_array = $_POST['uniName_row'];
    $grade_array = $_POST['grade_list_row'];
    $year_array = $_POST['year_row'];
    $country_array = $_POST['country_row'];

    $count = count($professional_array);

    for($j=0; $j<$count; $j++){
        if($professional_array[$j]!="" && $uniName_array[$j]!="" && $grade_array[$j]!="" && $year_array[$j]!="" && $country_array[$j]!=""){
            $sql4 = "INSERT INTO sm_cp_individual_professional (individual_id, qualification_id, university, grade_id, country, year) 
            VALUES ('$cp_id', '$professional_array[$j]', '$uniName_array[$j]', '$grade_array[$j]', '$country_array[$j]', '$year_array[$j]')";
            $result4 = mysqli_query($con,$sql4);
            if(!$result4){
                echo "Error occur".$sql4. "<br>" . $con->error;
            }
        }
    }
    

    $ans1=0;
    $ans2=0;
    $ans3=0;
    $ans4=0;
    $ans5=0;
    //send personal data to table

    $sql1 = "INSERT INTO sm_cp_individual (full_name,initials,gender,nic,mobile,designation,email,birthday,created_date,represent_institute) 
    VALUES ('$cpName','$cpFullName','$gender','$cpNic','$cpMobile','$cpDesignation','$cpEmail','$cpDob','$date','$institute')"; //have to insert value to represent institute 
    $result1 = mysqli_query($con,$sql1);
    if(!$result1){
        echo "Error occur".$sql1. "<br>" . $con->error;
    }
    else{
       $ans1=1;
    }

    //insert represent institute data

    if($institute==1){
        if($courses=='Other'){
            $sql_rep1 = "INSERT INTO sm_cp_individual_represent_institute (institute_name,individual_id) VALUES ('$other_details','$cp_id')";
            $result_rep1 = mysqli_query($con,$sql_rep1);
            if(!$result_rep1){
                echo $sql_rep1. "<br>" . $con->error;
            }
            else{
                $ans2=1;
            }
        }
        else{
            $sql_rep = "INSERT INTO sm_cp_individual_represent_institute (institute_name,individual_id) VALUES ('$courses','$cp_id')";
            $result_rep = mysqli_query($con,$sql_rep);
            if(!$result_rep){
                echo $sql_rep. "<br>" . $con->error;
            }
            else{
                $ans3=1;
            }
        }
        
    }

    //send highest qualification data to table
    echo $cp_id;
    
    $sql2 = "INSERT INTO sm_cp_individual_educational (individual_id,qualification,university,grade,year,country) 
    VALUES ('$cp_id','$highest_quali','$highest_uni','$highest_grade','$highest_year','$country_list1')"; //have to insert individual id
    $result2 = mysqli_query($con,$sql2);
    if(!$result2){
        echo $sql2."<br>".$con->error;
    }
    else{
        $ans4=1;
    }

    for($i=0; $i<count($subject); $i++){
        if($subject[$i] != 0){
            $sql3 = "INSERT INTO sm_cp_individual_expertise (individual_id,subject_id) VALUES ('$cp_id','$subject[$i]')";
            $result3 = mysqli_query($con,$sql3);
                if(!$result3){
                    echo $sql3."<br>".$con->error;
                }
                else{
                    $ans5=1;
                }
        }
    }

    if($ans1==1 && $ans4==1 && $ans5==1 && ($ans2==1 || $ans3==1)){
        echo "Successfully inserted data";
    }

    $con->close();

?>