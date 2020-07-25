<?php
include_once "../init.php";

if (isset($_GET['username'])) {
    // delete user
    $uname = trim($_GET['username']);
    if ($uname != '') {
        $sql = "DELETE FRoM users WHERE username = '" . $uname . "'";
        echo $sql;
        if (mysqli_query($connection, $sql))
            header('location: users_records.php');
    }
}
