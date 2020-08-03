<?php
include_once "../init.php";
$title = "RECORDS";
include_once "./_header.php";

//get all the purchases available to the current user

$sql = "SELECT * FROM purchase WHERE buyer = '". $_SESSION['user']['username'] ."'";
$query = mysqli_query($connection, $sql);


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