<?php
session_start();
if (isset($_POST["btn_submit"])){
    $name = $_POST["user"];
    $password = $_POST["password"];
    //connect to the database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "user_registration";
    //connect the database
    $connection =mysqli_connect($host,$user,$pass,$db_name);
    //select the query
    $selectQuery = "SELECT * FROM `usertable` WHERE name ='$name' && password = '$password'";
    //go ahead and save
    $result = mysqli_query($connection, $selectQuery);
    //check how many times $name is entered
    $num = mysqli_num_rows($result);
    //give a condition
    if ($num == 1){
        $_SESSION['username'] = $name;
        header("location:add_voters.php");
    }else{
        header("location:log_in.php");
    }

}
