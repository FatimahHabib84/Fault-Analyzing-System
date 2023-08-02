<?php
    
    $host = "localhost:3307";
    $user = "root";
    $password = "";
    $db = "faultanalyzing";

    $con = mysqli_connect($host,$user,$password,$db);

    if(mysqli_connect_errno()>0){
        mysqli_connect_error($con);
    }
?>