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

        <title>SELLER'S HOME</title>
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
                    <a class="nav-link navbar_a active" href="#home">seller's home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="produce.php">add produce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="records.php">records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="signout.php">signout</a>
                </li>
            </ul>
            </div>
        </nav>

        <section id="home" class="home">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide1"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide2"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide3"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
