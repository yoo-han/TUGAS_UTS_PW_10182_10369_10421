<?php
    $host = "localhost";
    $user = "ourtripx_ourtrip";
    $pass = "ourtrip.xyz";
    $name = "ourtripx_ourtrip";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MYSQL : " . mysqli_connect_error();
    }
?>