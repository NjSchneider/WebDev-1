<?php

  include_once('includes/connection.php');
  include_once('includes/article.php');

  $article = new Article;

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Blog Post | <?php echo $data['article_title']; ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Lato:400,900|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
  </head>

  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-sm">
        <a class="navbar-brand ml-4" href="index.php"><h4>Harvest 505 Gardens</h4>s</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarNavDropdownMenuLink" data-toggle="dropdown" href="#" aria-haspopup="true" aroa-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarNavDropdownMenuLink">
                <a class="dropdown-item" href="fruits.php">Fruits</a>
                <a class="dropdown-item" href="vegetables.php">Vegetables</a>
                <a class="dropdown-item" href="poultry.php">Poultry</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Our Blog</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid page-header">
      <h1>Harvest 505 Gardens</h1>
      <h5>Established: 2015</h5>
    </div>

    <div class="container-fluid banner" id="blog-article">
      <br>
      <h1>
        <?php echo $data['article_title']; ?>
        <small> posted <?php echo date('l jS', $data['article_timestamp']); ?> </small>
      </h1>
      <div class="header-line"></div>
    </div>

    <div class="container-fluid">
      <div class="blog-post">
        <p>
          <?php echo $data['article_content'] ?>
        </p>
      </div>
      <br><br>
      <a class="back-button" href="blog.php">&larr; Back</a>
    </div>

    <footer class="page-footer font-small unique-color-dark">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-8 col-lg-7 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get updated on all things Harvest 505 Gardens with Facebook</h6>
          </div>
          <div class="col-md-4 col-lg-5 text-center text-md-right">
            <a class="fb-ic" href="https://www.facebook.com/Harvest-505-Gardens-767393016768074/" target="_blank">
              <i class="fab fa-facebook-f fa-3x"> </i>
            </a>
          </div>
        </div>
      </div>
      <div class="container text-center text-md-left">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-md-0">
            <h6 class="text-uppercase font-weight-bold">Harvest 505 Gardens</h6>
            <div class="footer-line"></div>
            <br>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis ligula vel congue ullamcorper.
              Phasellus iaculis erat nec consequat semper.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-md-0">
            <h6 class="text-uppercase font-weight-bold">Our Products</h6>
            <div class="footer-line"></div>
            <br>
            <p>
              <a href="fruits.php">Fruits</a>
            </p>
            <p>
              <a href="vegetables.php">Vegetables</a>
            </p>
            <p>
              <a href="poultry.php">Poultry</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-md-0">
            <h6 class="text-uppercase font-weight-bold">Quick links</h6>
            <div class="footer-line"></div>
            <br>
            <p>
              <a href="index.php">Home</a>
            </p>
            <p>
              <a href="about.php">About Us</a>
            </p>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0">
            <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
            <div class="footer-line-contact"></div>
            <br>
            <p>
              <i class="fas fa-home"></i>
              505 State Hwy BB Fair Play, MO 65649
            </p>
            <p>
              <i class="fas fa-envelope"></i>
              <a href="mailto: something@gmail.com">something@gmail.com</a>
            </p>
            <p>
              <i class="fas fa-phone"></i>
              555-555-5555
            </p>
          </div>
        </div>
        <div class="footer-copyright text-center py-3">
          <small>&copy; 2019 Copyright: Nick Schneider & Braydon Bell</small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>

<?php
  } else{
    header('Location: index.php');
    exit();
  }

 ?>
