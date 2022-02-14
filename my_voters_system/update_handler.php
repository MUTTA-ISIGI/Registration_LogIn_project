<?php
    //check whether the update button is clicked
    if (isset($_POST["btn_update"])){
        //start receiving data
        $updatedVotersName = $_POST["v_name"];
        $updatedVotersIdNumber = $_POST["v_id_number"];
        $updatedVotersCounty = $_POST["v_county"];
        $updatedVotersGender = $_POST["v_gender"];
        $updatedVotersPhoneNumber = $_POST["v_phone_number"];
        $votersId = $_POST["id"];
            //connect the database
        require_once "db_connection.php";
        //prepare the query
        $updateQuery = "UPDATE `voters` SET `id`=null ,`v_name`='$updatedVotersName',`v_id_number`='$updatedVotersIdNumber',`v_county`='$updatedVotersCounty',`v_gender`='$updatedVotersGender',`v_phone_number`='$updatedVotersPhoneNumber' ";
        //update the query
        $update = mysqli_query($connection, $updateQuery);
        //check whether update was successful
        if (isset($update)){
            header("location:voters.php");
        }else{
            echo "Unsuccessful!!";
        }

    }