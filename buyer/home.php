<?php
$title = "HOME";
include_once "./_header.php";
?>

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

<section class="buy" id="buy">
    <div id="cereal" class="buy_pros">
        <h6 class="buy-head-bg">cereals</h6>
        <div class="container">
            <div class="row">
                <div class="col-md-3 pro_img">
                    <img src="../img/rice1.jpg" alt="">
                    <h6 class="pro_title">rice</h6>
                    <a href="cereal.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/millet1.jpg" alt="">
                    <h6 class="pro_title">millet</h6>
                    <a href="cereal.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/maize2.jpg" alt="">
                    <h6 class="pro_title">maize</h6>
                    <a href="cereal.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/rice3.jpg" alt="">
                    <h6 class="pro_title">rice</h6>
                    <a href="cereal.php">buy</a>
                </div>
            </div>
        </div>
    </div>

    <!-- root tuber -->
    <div id="root" class="buy_pros">
        <h6 class="buy-head-bg">root tubers</h6>
        <div class="container">
            <div class="row">
                <div class="col-md-3 pro_img">
                    <img src="../img/radish1.jpg" alt="">
                    <h6 class="pro_title">radish</h6>
                    <a href="root.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/yam2.jpg" alt="">
                    <h6 class="pro_title">yam</h6>
                    <a href="root.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/cassava1.jpg" alt="">
                    <h6 class="pro_title">cassava</h6>
                    <a href="root.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/potato2.jpg" alt="">
                    <h6 class="pro_title">potatoes</h6>
                    <a href="root.php">buy</a>
                </div>
            </div>
        </div>
    </div>

    <!-- legumes -->
    <div id="legume" class="buy_pros">
        <h6 class="buy-head-bg">legumes</h6>
        <div class="container">
            <div class="row">
                <div class="col-md-3 pro_img">
                    <img src="../img/beans.jpg" alt="">
                    <h6 class="pro_title">beans</h6>
                    <a href="legume.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/sorghum2.jpg" alt="">
                    <h6 class="pro_title">sorghum</h6>
                    <a href="legume.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/soybean3.jpg" alt="">
                    <h6 class="pro_title">soybeans</h6>
                    <a href="legume.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/groundnut1.jpg" alt="">
                    <h6 class="pro_title">groundnuts</h6>
                    <a href="legume.php">buy</a>
                </div>
            </div>
        </div>

    </div>

    <!-- vegetables -->
    <div id="vegetable" class="buy_pros">
        <h6 class="buy-head-bg">vegetables</h6>
        <div class="container">
            <div class="row">
                <div class="col-md-3 pro_img">
                    <img src="../img/cucumber2.jpg" alt="">
                    <h6 class="pro_title">cucumber</h6>
                    <a href="vegetable.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/carrot1.jpg" alt="">
                    <h6 class="pro_title">carrots</h6>
                    <a href="vegetable.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/tomato3.jpg" alt="">
                    <h6 class="pro_title">tomatoes</h6>
                    <a href="vegetable.php">buy</a>
                </div>
                <div class="col-md-3 pro_img">
                    <img src="../img/garlic1.jpg" alt="">
                    <h6 class="pro_title">garlic</h6>
                    <a href="vegetable.php">buy</a>
                </div>
            </div>
        </div>
    </div>
</section>


















</div>





<!-- footer -->
<?php include_once '../footer.php'; ?>


<!-- js files -->
<script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
<script src="../js/popper.min.js" charset="utf-8"></script>
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
<script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
<script src="../js/main.js" charset="utf-8"></script>
</body>

</html>