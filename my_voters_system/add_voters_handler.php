<?php
//if the add button is clicked
    if (isset($_POST["btn_add"])){
        //start receiving data
        $votersName = $_POST["v_name"];
        $votersIdNumber = $_POST["v_id_number"];
        $votersCounty = $_POST["v_county"];
        $votersGender = $_POST["v_gender"];
        $votersPhoneNumber = $_POST["v_phone_number"];
        //connect to the database to get the data
        require_once "db_connection.php";
        //prepare the data from the database
        $insertQuery = "INSERT INTO `voters`(`id`, `v_name`, `v_id_number`, `v_county`, `v_gender`, `v_phone_number`) VALUES (null,'$votersName',
                                                                                                    '$votersIdNumber','$votersCounty','$votersGender','$votersPhoneNumber')";
        //save the data
        $save = mysqli_query($connection, $insertQuery);
        if (isset($save)){
            header("location:add_voters.php");
        }else{
            echo "<script>alert('Submission failed!!')</script>";
        }
    }
