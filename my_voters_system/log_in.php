<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login and Registration</title>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 login-left">
            <h3 class="text-success">Login Here</h3>
            <form action="validation.php" method="post">
                <label>
                    <input name="user" placeholder="UserName" type="text" required>
                </label><br><br>
                <label>
                    <input name="password" placeholder="password" type="password" required>
                </label><br><br>
                <input name="btn_submit" class="btn btn-success" value="submit" type="submit">
            </form>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 login-right">
            <h3 class="text-success">Register Here</h3>
            <form action="registration.php" method="post">
                <label>
                    <input name="user" placeholder="UserName" type="text" required>
                </label><br><br>
                <label>
                    <input name="password" placeholder="password" type="password" required>
                </label><br><br>
                <input name="btn_register" class="btn btn-success" value="register" type="submit">
            </form>
        </div>
    </div>
   </div>
</div>
</body>
</html>
