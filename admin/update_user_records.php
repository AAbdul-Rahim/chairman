<?php
include_once "../init.php";
$title = "UPDATE USER";
include_once "./_header.php";
if (!isset($_SESSION) || !$_SESSION['user']['account_type'] == 'admin') {
    header("location: ../login.php");
}
// get the current user to update
$user = validate($_GET['username']);
if ($user == '' || !isset($_GET['username'])) {
    header("location: home.php");
}

$sql = "SELECT * FROM users WHERE username = '$user'";
$query = mysqli_query($connection, $sql);
$user_data = [];
if ($query) {
    $user_data = mysqli_fetch_all($query, $resulttype = MYSQLI_ASSOC)[0];
    // var_dump($user_data);
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $account_type = $_POST['account_type'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    if (updateUser($username, $email, $phone, $password, $account_type)) {
        header("location: home.php");
    } else {
        global $errors;
        array_push($errors, "Failed to update name already exist");
    }
}
?>
<section class="add-produce">
    <div class="produce-box">
        <h4 class="produce-h">update user form</h4>
        <form action="update_user_records.php" class="form2" method="post">
            <?php include_once "../errors.php"; ?>
            <?= $message ?? '' ?>

            <div>
                <div class="form2-label">user name</div>
                <input type="text" id="form2-input" name="username" required value="<?= $user_data['username'] ?>">
            </div>
            <div>
                <div class="form2-label">account type</div>
                <select name="account_type" id="form2-input" required>
                    <option>Select Account Type</option>
                    <option value="admin" <?php if ($user_data['account_type'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="seller" <?php if ($user_data['account_type'] == 'seller') echo 'selected'; ?>>Seller</option>
                    <option value="buyer" <?php if ($user_data['account_type'] == 'buyer') echo 'selected'; ?>>Buyer</option>
                </select>
            </div>
            <div>
                <div class="form2-label">email</div>
                <input name="email" type="email" id="form2-input" required value="<?= $user_data['email'] ?>">
            </div>
            <div>
                <div class="form2-label">phone number</div>
                <input name="phone" type="text" id="form2-input" required value="<?= $user_data['phone'] ?>">
            </div>

            <div>
                <input name="submit" type="submit" value="Update User" id="form2-submit">
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