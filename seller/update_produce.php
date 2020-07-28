<?php
include_once "../init.php";
$title = "UPDATE PRODUCE";
include_once "./_header.php";
//from the get data, find the product to be updated
$result = [];
if(isset($_GET['id']) && trim($_GET['id']) != ""){
    $id = trim($_GET['id']);
    $sql = "SELECT * FROM produce WHERE produce_id = '$id'";
    $query = mysqli_query($connection, $sql);
    $result = $query ? mysqli_fetch_assoc($query): false;
}
// edit produce implementation
if (isset($_POST['submit'])) {
    $name = validate($_POST['name']);
    $price = validate($_POST['price']);
    $quantity = validate($_POST['quantity']);
    $produce_type = validate($_POST['produce_type']);
    $seller = $_SESSION['user']['username'];
    $produce_id = $_POST['produce_id'];


        $sql = "UPDATE produce SET  name = '$name', price = '$price', quantity = '$quantity', produce_type='$produce_type', seller = '$seller' WHERE  produce_id = '$produce_id';";

        if (mysqli_query($connection, $sql)) {
            header("location: produce.php");
        }

}


?>

<section class="add-produce">
    <div class="produce-box">
        <h4 class="produce-h">add produce</h4>
        <form action="update_produce.php" class="form2" method="post" >
            <?php include_once "../errors.php";  ?>
            <input type="text" name="produce_id" id="" value="<?= $result['produce_id'] ?>" hidden/>
            <div>
                <div class="form2-label">produce type</div>
                <select name="produce_type" id="form2-input">
                    <option>Select Produce Type</option>
                    <option value="Cereals" <?= $result['produce_type'] == "Cereals"? "selected": ""; ?>>Cereals</option>
                    <option value="Legumes" <?= $result['produce_type'] == "Legumes"? "selected": ""; ?>>Legumes</option>
                    <option value="Root Tubers" <?= $result['produce_type'] == "Root Tubers"? "selected": ""; ?>>Root Tubers</option>
                    <option value="Vegetables" <?= $result['produce_type'] == "Vegetables"? "selected": ""; ?>>Vegetables</option>
                </select>
            </div>
            <div>
                <div class="form2-label">produce name</div>
                <input name="name" type="text" id="form2-input" value="<?= $result['name'] ?: ''; ?>">
            </div>
            <div>
                <div class="form2-label">produce quantity</div>
                <input name="quantity" type="text" id="form2-input" value="<?= $result['quantity'] ?: '' ?>">
            </div>
            <div>
                <div class="form2-label">produce price</div>
                <input name="price" type="text" id="form2-input" value="<?= $result['price'] ?: '' ?>">
            </div>
            <div>
                <input name="submit" type="submit" value="Update produce" id="form2-submit">
            </div>
        </form>
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