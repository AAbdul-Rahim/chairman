<?php
include_once "../init.php";
$title = "ADD PRODUCE";
include_once "./_header.php";

// add produce implementation
if (isset($_POST['submit'])) {
    $name = validate($_POST['name']);
    $price = validate($_POST['price']);
    $quantity = validate($_POST['quantity']);
    $produce_type = validate($_POST['produce_type']);
    $produce_id = uniqid();
    $seller = $_SESSION['user']['username'];

    // get the inage name 
    if (isset($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $fileError = $_FILES['file']['error'];
        $fileSize = $_FILES['file']['size'];
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileLocation =  $produce_id;
        $add_produce = false;

        // get the file type
        $tempType = explode('.', $fileName);
        $fileType = end($tempType);
        echo $fileType;


        // get for validations
        if ($fileError == 0) {
            if ($fileSize >= 200000) {
                if (in_array($fileType, $allowedExtensions)) {
                    $fileLocation .= "." . $fileType;
                    if (move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $fileLocation)) {

                        $add_produce = true;
                    }
                } else {
                    global $errors;
                    array_push($errors, "file should be ");
                }
            } else {
                global $errors;
                array_push($errors, "file too large(select file less than 2MB)");
            }
        } else {
            global $errors;
            array_push($errors, "an error occured");
        }
    }

    if ($add_produce) {
        // produce is ready for upload.
        $sql = "INSERT INTO produce (produce_id, name, price, quantity, produce_type, image, seller) VALUES('$produce_id', '$name', '$price', '$quantity', '$produce_type', '$fileLocation', '$seller');";

        if (mysqli_query($connection, $sql)) {
            echo "<script>alert('Data added successfully')</script>";
        }
    }
}


?>

<section class="add-produce">
    <div class="produce-box">
        <h4 class="produce-h">add produce</h4>
        <form action="add_produce.php" class="form2" method="post" enctype="multipart/form-data">
            <?php include_once "../errors.php";  ?>
            <div>
                <div class="form2-label">upload image</div>
                <input type="file" id="form2-img" name="file">
            </div>
            <div>
                <div class="form2-label">produce type</div>
                <select name="produce_type" id="form2-input">
                    <option>Select Produce Type</option>
                    <option value="Cereals">Cereals</option>
                    <option value="Legumes">Legumes</option>
                    <option value="Root Tubers">Root Tubers</option>
                    <option value="Vegetables">Vegetables</option>
                </select>
            </div>
            <div>
                <div class="form2-label">produce name</div>
                <input name="name" type="text" id="form2-input">
            </div>
            <div>
                <div class="form2-label">produce quantity</div>
                <input name="quantity" type="text" id="form2-input">
            </div>
            <div>
                <div class="form2-label">produce price</div>
                <input name="price" type="text" id="form2-input">
            </div>
            <div>
                <input name="submit" type="submit" value="add produce" id="form2-submit">
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