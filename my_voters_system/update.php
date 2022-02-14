<?php
//check if the update link has been clicked
if (isset($_GET["id"])){
    //start receiving data
    $receivedVotersName = $_GET["v_name"];
    $receivedVotersIdNumber = $_GET["v_id_number"];
    $receivedVotersCounty = $_GET["v_county"];
    $receivedVotersGender = $_GET["v_gender"];
    $receivedVotersPhoneNumber = $_GET["v_phone_number"];
    $VotersId = $_GET["id"];
}else{
    header("location:voters.php");
}
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Voters</title>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-center text-success">Updating voters</h1>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="post" action="update_handler.php">
            <label>
                <input value="<?php echo $receivedVotersName;?>" name="v_name" class="form-control" placeholder="Voters name" type="text">
            </label><br><br>
            <label>
                <input value="<?php echo $receivedVotersIdNumber;?>" name="v_id_number" class="form-control" placeholder="Voters ID number" type="number">
            </label><br><br>
            <select class="form-control" name="v_county" id="">
                <option value="<?php echo $receivedVotersCounty;?>">
                    value="<?php echo $receivedVotersCounty;?>"
                </option>
                <option value="">Select county</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kisii">Kisii</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Nyamira">Nyamira</option>
            </select><br><br>
            <select class="form-control" name="v_gender" id="">
                <option value="<?php echo $receivedVotersGender;?>">
                    value="<?php echo $receivedVotersGender;?>"
                </option>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <label>
                <input value="<?php echo $receivedVotersPhoneNumber;?>" name="v_phone_number" class="form-control" placeholder="Voters phone number" type="tel">
            </label><br><br>
            <input name="btn_update" class="btn btn-outline-info btn-block" value="update" type="submit">
            <a class="btn btn-outline-warning btn-block" href="voters.php">Back</a>
            <input "value="<?php echo $VotersId;?>" name="id" type="hidden">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>

