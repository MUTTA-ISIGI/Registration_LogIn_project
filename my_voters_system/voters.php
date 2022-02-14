<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VOTERS</title>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-success text-center">Registered Voters</h1>
    <table class="table table-success table-hover">
        <tr>
            <th>NAME</th>
            <th>Id Number</th>
            <th>County</th>
            <th>Gender</th>
            <th>Phone Number</th>
        </tr>
        <?php
        //connect to the database
        require_once "db_connection.php";
        //prepare the select query
        $selectQuery = "SELECT * FROM `voters`";
        //retrieve information from the qyery
        $voters = mysqli_query($connection, $selectQuery);
        //after retrieving now print the information using loop
        foreach ($voters as $voter){
            $votersName = $voter["v_name"];
            $votersIdNumber = $voter["v_id_number"];
            $votersCounty = $voter["v_county"];
            $votersGender = $voter["v_gender"];
            $votersPhoneNUmber = $voter["v_phone_number"];
            $votersId = $voter["id"];
            echo "
            <tr>
                <td>$votersName</td>
                <td>$votersIdNumber</td>
                <td>$votersCounty</td>
                <td>$votersGender</td>
                <td>$votersPhoneNUmber</td>
                <td><a href='update.php?id=$votersId&v_name=$votersName&v_id_number=$votersIdNumber&v_county=$votersCounty&v_gender=$votersGender&v_phone_number=$votersPhoneNUmber' class='btn btn-success'>Update</a></td>
                <td><a class='btn btn-danger' href='delete.php?id=$votersId'>Delete</a></td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
