<?php
include_once "../init.php";
$title = "MY PRODUCE";
include_once "./_header.php";

// get all produce
$sql = "SELECT * FROM produce WHERE seller = '" . $_SESSION['user']['username'] . "'";
$query = mysqli_query($connection, $sql);
$result = $query ? mysqli_fetch_all($query, $resulttype = MYSQLI_ASSOC) : false;

//var_dump($result);
//die();

?>

<section class="add-produce">
    <div class="produce-box">

        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Product Image</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Price</th>
                    <th class="th-sm">Quantity</th>
                    <th class="th-sm">Produce Type</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && !empty($result)) : ?>
                    <?php foreach ($result as $data) : ?>
                        <?php extract($data); ?>
                        <tr>
                            <td><img style="width: 100px;" src="<?= "uploads/" . $image; ?>" alt="produce image" /></td>
                            <td><?= $name; ?></td>
                            <td><?= $price; ?></td>
                            <td><?= $quantity; ?></td>
                            <td><?= $produce_type; ?></td>
                            <td><a href="update_produce.php?id=<?= $produce_id ?>" class="btn btn-outline-success fa fa-edit">Edit</a></td>
                            <td><a href="delete_produce.php?id=<?= $produce_id ?>" class="btn btn-outline-danger fa fa-trash" onclick="delete ()">Delete</a></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>Product Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Produce Type</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </tfoot>
        </table>

    </div>
    </div>
</section>

</div>






<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script src="../mdbootstrap/js_1/addons/datatables.min.js"></script>
</body>

</html>