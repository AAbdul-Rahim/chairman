<?php
include_once "../init.php";
$title = "SINGLE PRODUCT";
include_once "./_header.php";

?>

<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="../img/carrot1.jpg" alt="">
            </div>

            <!-- product info -->
            <div class="col-md-7">
                <form action="single_product.php" method="post">
                    <div class="side_info">
                        <h5 class="p_name">carrot</h5>
                        <p>
                            <b>Quantity:</b>
                            <input name='qty' type="number" id="p_quantity" value="1">
                        </p>
                        <p><b>Price:GHC</b><span>$100</span></p>
                        <p><b>Description:</b>thwdffgfk </p>
                        <div class="p_req">
                            <button name="submit" type = 'submit' id='request'>request</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>







<!-- js files -->
<script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
<script src="../js/popper.min.js" charset="utf-8"></script>
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
<script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
<script src="../js/main.js" charset="utf-8"></script>
</body>

</html>