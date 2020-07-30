<?php
include_once "../init.php";
$title = "HOME";
include_once "./_header.php";

//get all the produce available on the site

$sql = "SELECT * FROM produce";
$query = mysqli_query($connection, $sql);
$result = $query ? mysqli_fetch_all($query, $resulttype= MYSQLI_ASSOC) : false;

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
    <?php if(!empty($result)):  ?>

    <div id="cereal" class="buy_pros">
        <div class="container">
            <div class="row">
        <?php foreach($result as $data): ?>
            <?php extract($data); ?>
                <div class="col-md-3 pro_img">
                    <img src="../seller/uploads/<?= $image ?>" alt="">
                    <h6 class="pro_title"><?= $name ?></h6>
                    <a href="single.php">buy</a>
                </div>
        <?php endforeach ?>
            </div>
        </div>
    </div>

    <?php endif ?>
</section>


<!-- js files -->
<script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
<script src="../js/popper.min.js" charset="utf-8"></script>
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
<script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
<script src="../js/main.js" charset="utf-8"></script>
</body>

</html>