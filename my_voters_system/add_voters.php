<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add voters</title>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <a  class="float-right" href="log_out.php">LOGOUT</a>
    <h1 class="text-white text-center head">Welcome <?php echo $_SESSION['username']; ?></h1>
</div>
    <h1 class="text-center text-success">Add voters</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="add_voters_handler.php">
                    <label>
                        <input name="v_name" class="form-control" placeholder="Voters name" type="text">
                    </label><br><br>
                <label>
                    <input name="v_id_number" class="form-control" placeholder="Voters ID number" type="number">
                </label><br><br>
                <select class="form-control" name="v_county" id="">
                    <option value="">Select county</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Bungoma">Bungoma</option>
                    <option value="Nyamira">Nyamira</option>
                </select><br><br>
                <select class="form-control" name="v_gender" id="">
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br><br>
                <label>
                    <input name="v_phone_number" class="form-control" placeholder="Voters phone number" type="number">
                </label><br><br>
                    <input name="btn_add" class="btn btn-outline-success btn-block" value="add" type="submit">
                <a class="btn btn-outline-info btn-block" href="voters.php">View voters</a>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>
