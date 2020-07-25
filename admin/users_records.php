<?php
include_once "../init.php";
$title = "USERS RECORDS";
include_once "./_header.php";
if (!isset($_SESSION) || !$_SESSION['user']['account_type'] == 'admin') {
    header("location: ../login.php");
}

// get all the available registered users
$sql = "SELECT * FROM users";
$query = mysqli_query($connection, $sql);



?>
<section class="record-table">
    <h4>user's information</h4>
    <table class="table table-borderless all-table">
        <thead>
            <tr>

                <th scope="col">user name</th>
                <th scope="col">account type</th>
                <th scope="col">email</th>
                <th scope="col">phone number</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($query) > 0) : ?>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>

                    <tr>

                        <td><?= $data['username'] ?></td>
                        <td><?= $data['account_type'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['phone'] ?></td>
                        <td>
                            <span class="cart-btn1">
                                <a href="update_user_records.php?username=<?= $data['username'] ?>">update</a>
                            </span>
                            <span class="cart-btn2">
                                <a onclick="removeUser('<?= $data['username']; ?>')">remove</a>
                            </span>

                        </td>
                    </tr>
                <?php endwhile ?>
            <?php endif ?>

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
    function removeUser(uid) {

        if (confirm("Are you sure you want to delete"))
            window.location.href = "delete.php?username=" + uid;
    }
</script>
</body>

</html>