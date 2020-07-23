<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">

        <!-- css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">

        <title>LEGUMES</title>
</head>
<body>
    <div class="site_container">

        <nav class="navbar navbar-expand-lg sticky-top navbar_bg">
            <a class="navbar-brand logo" href="#">Navbar</a>
            <button class="navbar-toggler toggle_btn" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  ml-auto navbar_ul">
                <li class="nav-item active">
                    <a class="nav-link navbar_a active" href="home.php">buyer's home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="records.php">records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="cart.php">cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="signout.php">signout</a>
                </li>
            </ul>
            </div>
        </nav>

        <section class="buy" id="buy">
            <div class="breadcrumb"><a href="home.php">home</a>&nbsp;/&nbsp;<a href="cereal.php">legumes</a> </div>
            <div id="cereal" class="buy_pros">
                <h6 class="buy-head-bg">legumes</h6>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 pro_img">
                            <img src="../img/rice1.jpg" alt="">
                            <h6 class="pro_title">rice</h6>
                            <a href="">buy</a>
                        </div>
                        <div class="col-md-3 pro_img">
                            <img src="../img/millet1.jpg" alt="">
                            <h6 class="pro_title">millet</h6>
                            <a href="">buy</a>
                        </div>
                        <div class="col-md-3 pro_img">
                            <img src="../img/maize2.jpg" alt="">
                            <h6 class="pro_title">maize</h6>
                            <a href="">buy</a>
                        </div>
                        <div class="col-md-3 pro_img">
                            <img src="../img/rice3.jpg" alt="">
                            <h6 class="pro_title">rice</h6>
                            <a href="">buy</a>
                        </div>
                        <div class="col-md-3 pro_img">
                            <img src="../img/radish1.jpg" alt="">
                            <h6 class="pro_title">radish</h6>
                            <a href="">buy</a>
                        </div>
                        <div class="col-md-3 pro_img">
                            <img src="../img/yam2.jpg" alt="">
                            <h6 class="pro_title">yam</h6>
                            <a href="">buy</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>





    </div>





        <!-- footer -->
        <?php include_once '../footer.php' ; ?>
        

        <!-- js files -->
        <script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
        <script src="../js/popper.min.js" charset="utf-8"></script>
        <script src="../js/bootstrap.min.js" charset="utf-8"></script>
        <script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
        <script src="../js/main.js" charset="utf-8"></script>
    </body>
</html>
