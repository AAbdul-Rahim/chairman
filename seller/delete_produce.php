<?php
include_once "../init.php";

if(isset($_GET['id'])){
    $id = trim($_GET['id']);

    $sql = "DELETE FROM produce WHERE produce_id = '$id'";
    if(mysqli_query($connection, $sql)){
        header("location: produce.php");
    }
}