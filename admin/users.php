<?php
$title = "ADD USERS";
include_once "./_header.php";
?>
<section class="add-produce">
    <div class="produce-box">
        <h4 class="produce-h">user signup form</h4>
        <form action="" class="form2">
            <div>
                <div class="form2-label">user name</div>
                <input type="text" id="form2-input">
            </div>
            <div>
                <div class="form2-label">account type</div>
                <select name="" id="form2-input">
                    <option>Select Account Type</option>
                    <option value="Admin">Admin</option>
                    <option value="Seller">Seller</option>
                    <option value="Buyer">Buyer</option>
                </select>
            </div>
            <div>
                <div class="form2-label">email</div>
                <input type="email" id="form2-input">
            </div>
            <div>
                <div class="form2-label">phone number</div>
                <input type="text" id="form2-input">
            </div>
            <div>
                <div class="form2-label">password</div>
                <input type="text" id="form2-input">
            </div>
            <div>
                <input type="submit" value="register" id="form2-submit">
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