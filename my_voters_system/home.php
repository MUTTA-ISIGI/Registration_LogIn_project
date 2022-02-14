<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:log_in.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
    <a  class="float-right" href="log_out.php">LOGOUT</a>
    <h1 class="text-white text-center head">Welcome <?php echo $_SESSION['username']; ?></h1>
    </div>
</body>
</html>