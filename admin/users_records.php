<?php
include_once "../init.php";
$title = "USERS RECORDS";
include_once "./_header.php";
if (!isset($_SESSION) || !$_SESSION['user']['account_type'] == 'admin') {
    header("location: ../login.php");
}
?>
<section class="record-table">
    <h4>user's information</h4>
    <table class="table table-borderless all-table">
        <thead>
            <tr>
                <th scope="col">s/n</th>
                <th scope="col">user name</th>
                <th scope="col">account type</th>
                <th scope="col">email</th>
                <th scope="col">phone number</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>21/43/6374</td>
                <td>
                    <span class="cart-btn1">
                        <a href="">update</a>
                    </span>
                    <span class="cart-btn2">
                        <a href="">remove</a>
                    </span>

                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>21/43/6374</td>
                <td>
                    <span class="cart-btn1">
                        <a href="">update</a>
                    </span>
                    <span class="cart-btn2">
                        <a href="">remove</a>
                    </span>

                </td>
            </tr>
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