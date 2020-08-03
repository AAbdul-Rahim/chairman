<?php
include_once "../init.php";
$title = "SINGLE PRODUCT";
include_once "./_header.php";


//check if the get param is available
if(isset($_GET['id']) && trim($_GET['id']) != '')
{
    $id = trim($_GET['id']);

    $sql = "SELECT * FROM produce WHERE produce_id ='$id'";
    $query = mysqli_query($connection, $sql);
    $result = $query ? mysqli_fetch_assoc($query) : false;
//    var_dump($result);
    if($result)
        extract($result);
}

if(isset($_POST['buy']))
{
    $id = validate($_POST['id']);
    $qty = $_POST['qty'];

//    get the product by produce if
    $sql = "SELECT * FROM produce WHERE  produce_id = '$id'";
    $query = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "INSERT INTO purchase (produce_id, produce_name, produce_type, buyer, quantity, seller)
                    VALUES ('".$row['produce_id']."', '".$row['name']."', '".$row['produce_type']."', '".$_SESSION['user']['username']."', '$qty', '".$row['seller']."')";
//        echo $sql2;
        if(mysqli_query($connection, $sql2))
            header('location: cart.php');
    }
}


?>

<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="../seller/uploads/<?= $image; ?>" alt="image of product">
            </div>

            <!-- product info -->
            <div class="col-md-7">
                <form action="single.php" method="post">
                    <div class="side_info">
                        <input type="text" name="id" id="id" value="<?= $produce_id ?>" hidden/>
                        <h5 class="p_name"><?= $name; ?></h5>
                        <p>
                            <b>Quantity:</b>
                            <input name='qty' type="number" id="p_quantity" value="1">
                        </p>
                        <p><b>Price:GHC</b><span><?= $price; ?></span></p>
                        <div class="p_req">
                            <button name="buy" type = 'submit' id='request'>Buy Now</button>
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