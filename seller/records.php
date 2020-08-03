<?php
include_once "../init.php";
$title = "RECORDS";
include_once "./_header.php";

//get all purchases available to seller

$sql = "SELECT * FROM purchase WHERE seller = '".$_SESSION['user']['username']."'";
$query = mysqli_query($connection, $sql);
//var_dump($query);
//die();
?>
<section class="record-table">
    <h4>record of purchase made</h4>
    <table class="table table-borderless all-table">
        <thead>
            <tr>
                <th scope="col">produce type</th>
                <th scope="col">produce name</th>
                <th scope="col">quantity</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?= $row['produce_type']; ?></td>
                <td><?= $row['produce_name']; ?></td>
                <td><?= $row['quantity']; ?></td>
<!--                <td>-->
<!--                    <span class="cart-btn1">-->
<!--                        <a href="">update</a>-->
<!--                    </span>-->
<!--                    <span class="cart-btn2">-->
<!--                        <a href="">delete</a>-->
<!--                    </span>-->
<!---->
<!--                </td>-->
            </tr>
        <?php endwhile ?>

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
</body>

</html>