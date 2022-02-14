<?php
    session_start();
    header("location:log_in.php");
    if (isset($_POST["btn_register"])){
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
    $insertQuery = "INSERT INTO `usertable`(`name`, `password`) VALUES ('$name','$password')";
    //go ahead and save
        $save = mysqli_query($connection, $insertQuery);
        //check how many times $name is entered
        //$num = mysqli_num_rows($save);
        //give a condition
        if ($save == 1){
            echo "user name already entered!!";
        }else{
            echo "Registration successful";
        }

    }

