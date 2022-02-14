<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "voters_db";
    //connect the database
$connection =mysqli_connect($host,$user,$pass,$db_name);
    //check if connected
if (!isset($connection)){
    die("DB connection failed");
}

