<?php
include_once "../init.php";

if(isset($_GET['id']) && trim($_GET['id']))
{
    $id = trim($_GET['id']);
    $buyer = $_SESSION['user']['username'];
    $sql = "INSERT INTO cart (produce_id, buyer) VALUES ('$id', '$buyer')";
    $query = mysqli_query($connection, $sql);
    if($query){
        header('location: cart.php');
    }
}else{
    header('location: home.php');
}