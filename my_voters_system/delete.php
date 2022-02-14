<?php
//check if the delete button is clicked
    if (isset($_GET["id"])){
        //start receiving the voter's id
        $votersId = $_GET["id"];
        //connect the database
        require_once "db_connection.php";
        //prepare the delete query
        $deleteQuery = "DELETE FROM voters where id=$votersId";
        //delete by using mysqli_query()
        $delete = mysqli_query($connection , $deleteQuery);
        //check if delete was successful
        if (isset($delete)){
            //redirect it back to voters.php
            header("location:voters.php");
        }else{
            die("Deleting failed!!!");
        }
    }
