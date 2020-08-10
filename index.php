<?php
include_once "init.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);
    // if (isset($_SESSION) || $_SESSION['user']['account_type'] == 'admin') {
    //     header("location: admin/home.php");
    // } else if (isset($_SESSION) || $_SESSION['user']['account_type'] == 'seller') {
    //     header("location: seller/home.php");
    // } else if (isset($_SESSION) || $_SESSION['user']['account_type'] == 'buyer') {
    //     header("location: buyer/home.php");
    // }
    // var_dump($_SESSION);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>USER LOGIN</title>
</head>

<body>
    <div class="site_container">
        <div class="login_container">
            <div class="login_box">
                <form action="index.php" method="POST" class="form1">
                    <h6 id="form1_fh">Please Login</h6>
                    <?php include_once "errors.php"; ?>
                    <div>
                        <i class="fa fa-users form1_fa"></i>
                        <input name="username" type="text" id="form1_input" placeholder="Username">
                    </div>
                    <div>
                        <i class="fa fa-lock form1_fa"></i>
                        <input name="password" type="password" id="form1_input" placeholder="Password">
                    </div>
                    <div>
                        <input name="submit" type="submit" value="login" id="form1_submit">
                    </div>
                    <a href="../index.php">
                        <i class="fa fa-angle-double-left"></i>
                        go back
                    </a>
                </form>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include_once 'footer.php'; ?>


    <!-- js files -->
    <script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
    <script src="../js/popper.min.js" charset="utf-8"></script>
    <script src="../js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="../js/main.js" charset="utf-8"></script>
</body>

</html>