<?php
include_once "../init.php";
$title = "BUYER'S CART";
include_once "./_header.php";

//get all buyer's product id's from cart
$sql = "SELECT produce_id FROM cart WHERE buyer = '". $_SESSION['user']['username'] ."'";
$query = mysqli_query($connection, $sql);
$result = $query ? mysqli_fetch_all($query, $resulttype = MYSQLI_ASSOC) : false;

$id = [];
if($result){
    foreach($result as $data){
      extract($data);
        array_push($id, $produce_id);
    }
}
$sql2 = "SELECT * FROM produce WHERE produce_id IN (";
for($i = 0; $i < count($id); $i++){
    if($i != count($id)-1)
        $sql2 .= "'".$id[$i] . "', ";
    else
        $sql2 .= "'".$id[$i]."'";

}
    $sql2 .= ")";

$query2 = mysqli_query($connection, $sql2);
$result2 = $query2 ? mysqli_fetch_all($query2, $resulttype = MYSQLI_ASSOC) : false;
?>
<section class="record-table">
    <h4>your cart</h4>
    <table class="table table-borderless all-table">
        <thead>
            <tr>
                <th scope="col">produce type</th>
                <th scope="col">produce name</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        if($result2){
            foreach($result2 as $data){
                extract($data);
                ?>
            <tr>
                <td><?= $produce_type; ?></td>
                <td><?= $name; ?></td>
                <td>
                    <span class="cart-btn1">
                        <a href="single.php?id=<?= $produce_id; ?>">buy</a>
                    </span>
                    <span class="cart-btn2">
                        <a href="delete_cart.php?id=<?= $produce_id; ?>" id="delete">remove</a>
                    </span>

                </td>
            </tr>
        <?php } } ?>

        </tbody>
    </table>
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
<script>
    const button = document.getElementById("delete");
    button.addEventListener('click',  (event)=>{
        if(confirm("Are you sure you want to delete?"))
            return true;
        else
            event.preventDefault();
    })
</script>
</body>

</html>