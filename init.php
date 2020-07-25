<?php
session_start();
ob_start();

// connect to the database
$connection = mysqli_connect("localhost", "root", "", "chairman");
$errors = [];

function validate($string)
{
    $string = trim($string);
    $string = htmlspecialchars($string);
    $string = addslashes($string);
    return $string;
}

function login($username, $password)
{
    // echo userExist($username);
    // die();
    global $connection;
    // get the current user from database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $query = mysqli_query($connection, $sql);

    // check if the query is successful
    $result = $query ? mysqli_fetch_assoc($query) : [];


    //    check if any result has been returned

    if (userExist($username)) {
        // if user already exists, log them in
        // get the password  in database 
        $stored_password = $result['password'];
        // verify password
        if (password_verify($password, $stored_password)) {
            // store user in session
            $_SESSION['user'] = $result;
            // redirect user to the appropraite page
            if (isset($_SESSION) && $_SESSION['user']['account_type'] == 'admin') {
                header("location: admin/home.php");
            } else if (isset($_SESSION) && $_SESSION['user']['account_type'] == 'seller') {
                header("location: seller/home.php");
            } else if (isset($_SESSION) && $_SESSION['user']['account_type'] == 'buyer') {
                header("location: buyer/home.php");
            }
        }
    } else {
        // show error message
        global $errors;
        array_push($errors, "Username and password combination error");
    }
}

function addUser($username, $email, $phone, $password, $account_type)
{
    global $connection;
    // encript the password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(username, email, phone, password, account_type) VALUES('$username', '$email', '$phone', '$password', '$account_type');";

    if (!userExist($username)) {
        //check if the username already exist 
        mysqli_query($connection, $sql);
        return true;
    }
}

function updateUser($username, $email, $phone, $account_type)
{
    global $connection;
    $sql = "UPDATE  users SET username = '$username', email = '$email', phone = '$phone', account_type = '$account_type';";
    mysqli_query($connection, $sql);
    return true;
}

function userExist($username)
{
    global $connection;
    // get the current user from database
    $sql = "SELECT username FROM users WHERE username = '$username'";
    $query = mysqli_query($connection, $sql);

    $result = $query ? mysqli_fetch_assoc($query) : [];
    // var_dump($result);
    // echo $sql;
    if (!empty($result)) {
        return true;
    } else {
        return false;
    }
}
