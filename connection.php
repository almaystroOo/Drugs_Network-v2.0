<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "drugsdb";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


    if($conn){
            //echo "DB CONNECT";
        }else{
          echo "error connection";
        }
