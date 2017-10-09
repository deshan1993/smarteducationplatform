<?php

    $con = mysqli_connect("localhost","root","","smart_education");
    $created_date = date('Y-m-d H:m:s');

    $inst_id = $_POST['id2'];
    
    
    $instName = $_POST['instName'];
    $regNo = $_POST['regNo'];
    $dateOfReg = $_POST['dateOfReg'];
    $adrz = $_POST['adrz'];
    $mobileNum = $_POST['mobileNum'];
    $person_no = $_POST['person_no'];
    $foreignUni = $_POST['foreignUni'];

    $expert_sub1 = $_POST['expert_sub1'];
    $expert_sub2 = $_POST['expert_sub2'];
    $expert_sub3 = $_POST['expert_sub3'];

    //insert institute details
    $sql = "INSERT INTO sm_cp_institute (institute_name,reg_no,reg_date,foreign_uni,contact_no,contact_person_no,address,created_date) 
    VALUES ('$instName','$regNo','$dateOfReg','$foreignUni','$mobileNum','$person_no','$adrz','$created_date')";
    $result = mysqli_query($con,$sql);

    //insert expertise subject data
    $subject = array($expert_sub1,$expert_sub2,$expert_sub3);
    for($i=0; $i<count($subject); $i++){
        $insert_sub = "INSERT INTO sm_cp_institute_subject (institute_id,subject_id) VALUES ('$inst_id','$subject[$i]')";
        $result_sub = mysqli_query($con,$insert_sub);
    }
    
    if(!$result && !$result_sub){
        echo $sql1. "<br>" . $con->error;
        echo $insert_sub."<br>".$con->error;
    }
    else{
        echo "successfully entered institute data";
    }

    

    

?>