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

        <title>ADD PRODUCE</title>
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
                    <a class="nav-link navbar_a" href="home.php">seller's home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="produce.php">add produce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a  active" href="records.php">records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar_a" href="signout.php">signout</a>
                </li>
            </ul>
            </div>
        </nav>


        <section class="record-table">
            <h4>record of purchase made</h4>
            <table class="table table-borderless all-table">
                <thead>
                    <tr>
                        <th scope="col">s/n</th>
                        <th scope="col">produce type</th>
                        <th scope="col">produce name</th>
                        <th scope="col">quantity</th>
                        <th scope="col">remaining</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>21/43/6374</td>
                        <td>
                            <span class="cart-btn1">
                                <a href="">update</a>
                            </span>
                            <span class="cart-btn2">
                                <a href="">delete</a>
                            </span>
                            
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>21/43/6374</td>
                        <td>
                            <span class="cart-btn1">
                                <a href="">update</a>
                            </span>
                            <span class="cart-btn2">
                                <a href="">delete</a>
                            </span>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
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
