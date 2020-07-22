<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>HOME</title>
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
                <a class="nav-link navbar_a" href="#">home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link navbar_a" href="#">about us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navbar_a" href="#">contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navbar_a" href="seller/login.php">seller</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navbar_a" href="buyer/login.php">buyer</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navbar_a" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
            </ul>
          </div>
      </nav>
    </div>

  



        <!-- footer -->
        <?php include_once 'footer.php' ; ?>
        

        <!-- js files -->
        <script src="js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
        <script src="js/popper.min.js" charset="utf-8"></script>
        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
