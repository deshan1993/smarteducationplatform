<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "smart_education";

    $con = mysqli_connect($server_name,$user_name,$password,$database);

    if($con->connect_error){
        die("Connection failed".$con->connect_error);
    }

?>