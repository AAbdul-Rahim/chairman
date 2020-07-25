<?php
include_once "init.php";

if (isset($_SESSION['user'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
}
