<?php
include_once "../init.php";
if(isset($_GET['id']) && trim($_GET['id']) != ""){
    $id = trim($_GET['id']);

    $sql= "DELETE FROM cart WHERE  produce_id = '$id'";
    echo $sql;
    if(mysqli_query($connection, $sql)) echo 'done';
        header('location: cart.php');
}else{
    header('location: cart.php');
}