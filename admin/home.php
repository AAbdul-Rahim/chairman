<?php
include_once "../init.php";
$title = "HOME";
include_once "./_header.php";
// var_dump($_SESSION);
if (!isset($_SESSION) || !$_SESSION['user']['account_type'] == 'admin') {
    header("location: ../login.php");
}
?>

<section id="home" class="home">
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