<?php
include_once "../init.php";
$title = "ADD USERS";
include_once "./_header.php";
if (!isset($_SESSION) || !$_SESSION['user']['account_type'] == 'admin') {
    header("location: ../login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $account_type = $_POST['account_type'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if (addUser($username, $email, $phone, $password, $account_type)) {
        $message = "Account created successfully";
    } else {
        global $errors;
        array_push($errors, "User name already exist");
    }
}
?>
<section class="add-produce">
    <div class="produce-box">
        <h4 class="produce-h">user signup form</h4>
        <form action="users.php" class="form2" method="post">
            <?php include_once "../errors.php"; ?>
            <?= $message ?? '' ?>
            <div>
                <div class="form2-label">user name</div>
                <input type="text" id="form2-input" name="username" reqquired>
            </div>
            <div>
                <div class="form2-label">account type</div>
                <select name="account_type" id="form2-input" reqquired>
                    <option>Select Account Type</option>
                    <option value="admin">Admin</option>
                    <option value="seller">Seller</option>
                    <option value="buyer">Buyer</option>
                </select>
            </div>
            <div>
                <div class="form2-label">email</div>
                <input name="email" type="email" id="form2-input" reqquired>
            </div>
            <div>
                <div class="form2-label">phone number</div>
                <input name="phone" type="text" id="form2-input" reqquired>
            </div>
            <div>
                <div class="form2-label">password</div>
                <input name="password" type="password" id="form2-input" value="1234" reqquired>
            </div>
            <div>
                <input name="submit" type="submit" value="register" id="form2-submit">
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