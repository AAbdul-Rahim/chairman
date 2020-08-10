<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="site_container">
        <nav class="navbar navbar-expand-lg sticky-top navbar_bg">
            <a class="navbar-brand logo" href="#">Farmers Store</a>
            <button class="navbar-toggler toggle_btn" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav  ml-auto navbar_ul">
                    <li class="nav-item active">
                        <a class="nav-link navbar_a" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar_a" href="records.php">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar_a active" href="cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar_a" href="../logout.php">Signout</a>
                    </li>
                </ul>
            </div>
        </nav>