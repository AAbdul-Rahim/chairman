<?php
$title = "ADD PRODUCE";
include_once "./_header.php";
?>

<section class="add-produce">
    <div class="produce-box">
        <h4 class="produce-h">add produce</h4>
        <form action="" class="form2">
            <div>
                <div class="form2-label">upload image</div>
                <input type="file" id="form2-img">
            </div>
            <div>
                <div class="form2-label">produce type</div>
                <select name="" id="form2-input">
                    <option>Select Produce Type</option>
                    <option value="Cereals">Cereals</option>
                    <option value="Legumes">Legumes</option>
                    <option value="Root Tubers">Root Tubers</option>
                    <option value="Vegetables">Vegetables</option>
                </select>
            </div>
            <div>
                <div class="form2-label">produce name</div>
                <input type="text" id="form2-input">
            </div>
            <div>
                <div class="form2-label">produce quantity</div>
                <input type="text" id="form2-input">
            </div>
            <div>
                <div class="form2-label">produce price</div>
                <input type="text" id="form2-input">
            </div>
            <div>
                <input type="submit" value="add produce" id="form2-submit">
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