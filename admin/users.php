
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

        <title>ADD USERS</title>
</head>
<body>
    <div class="site_container">
        <nav class="navbar navbar-expand-lg sticky-top navbar_bg">
            <a class="navbar-brand logo" href="#">Navbar</a>
            <button class="navbar-toggler toggle_btn" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  ml-auto navbar_ul">
                <li class="nav-item active">
                    <a class="nav-link navbar_a" href="home.php">admin's home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a active" href="users.php">add user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="users_records.php">records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="signout.php">signout</a>
                </li>
            </ul>
            </div>
        </nav>

        <section class="add-produce">
            <div class="produce-box">
                <h4 class="produce-h">user signup form</h4>
                <form action="" class="form2">
                    <div>
                        <div class="form2-label">user name</div>
                        <input type="text" id="form2-input">
                    </div>
                    <div>
                        <div class="form2-label">account type</div>
                        <select name="" id="form2-input">
                            <option>Select Account Type</option>
                            <option value="Admin">Admin</option>
                            <option value="Seller">Seller</option>
                            <option value="Buyer">Buyer</option>
                        </select>
                    </div>
                    <div>
                        <div class="form2-label">email</div>
                        <input type="email" id="form2-input">
                    </div>
                    <div>
                        <div class="form2-label">phone number</div>
                        <input type="text" id="form2-input">
                    </div>
                    <div>
                        <div class="form2-label">password</div>
                        <input type="text" id="form2-input">
                    </div>
                    <div>
                        <input type="submit" value="register" id="form2-submit">
                    </div>
                </form>
            </div>
        </section>










    </div>





        <!-- footer -->
        <?php include_once '../footer.php' ; ?>
        

        <!-- js files -->
        <script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
        <script src="../js/popper.min.js" charset="utf-8"></script>
        <script src="../js/bootstrap.min.js" charset="utf-8"></script>
        <script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
        <script src="../js/main.js" charset="utf-8"></script>
    </body>
</html>