<?php

  include_once('includes/connection.php');
  include_once('includes/vegetables.php');

  $vegetable = new Vegetable;
  $vegetables = $vegetable->fetch_all();


 ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Vegetables</title>
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Lato:400,900|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
  </head>

  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-sm">
        <a class="navbar-brand ml-4" href="#"><h4>Harvest 505 Gardens</h4></a>
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

    <div class="container-fluid" id="vegetables-cards">
      <div class="row">
        <div class="col favs">
          <h2>A few of our seasonal favorites</h2>
          <div class="header-line"></div>
        </div>
      </div>
      <div class="row">
        <?php foreach($vegetables as $vegetable){ ?>
        <div class="col-sm-4 product-start">
          <a href=" #<?php echo $vegetable['vegetable_title']; ?>" >
          <img class="product cardImg" src=" <?php echo $vegetable['vegetable_image']; ?> " alt="hay">
          <div class="card">
            <div class="card-body">
              <h5> <?php echo $vegetable['vegetable_title']; ?> </h5>
              <p> <?php echo $vegetable['vegetable_tag']; ?> </p>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>
      </div>
    </div>

    <div class="container-fluid" id="vegetable-process-info">
      <h2>Our Vegetable Process</h2>
      <div id="process">
        <p>
          Managing a garden requires healthy physical and mental activity daily which produce a healthy diet. The inputs and outputs complement each other and are aligned to our goals.
        </p>
        <p>
          Our practices are similar, I think, to what has been called “permaculture”. Our flock of hens, rotated to fresh pasture daily, produce delicious eggs, but also fertilize, till,
          and remove insect pests from our garden beds. The beds ARE the pasture post-harvest. The surplus eggs are sold to the community to cover the cost of the high grade supplemental
          feed the hens require.
        </p>
        <p>
          We do not spray our plants with pesticide, nor do we control weeds with herbicides. Rather we employ organic methods such as crop rotation, companion planting, floating row cover,
          and lots of old-fashioned hand-picking. We initially formed our beds with cardboard covered with 20” of hay from our pasture, then dug out the remaining Bermuda and Johnson grass by
          hand. We plant cover crops to enrich the soil and prevent the germination of weed seeds. We use Rogue hoes to remove stray weeds forcibly.
        </p>
        <p>
          Our orchard, vineyard, and berry patches are covered by a rich humus created from thick layers of wood chips frequently dumped on our homestead by a local tree removal services.
          Stray weeds still plant themselves in the rich mulch, but pull out easily after a rain. We do use an organic fungicide as needed.
        </p>
      </div>
    </div>

    <?php
      $result = $pdo->query("SELECT * FROM vegetables WHERE vegetable_id = '1'");

      $row_array = $result->fetch(PDO::FETCH_ASSOC);
      $vegetable_title = $row_array['vegetable_title'];
      $vegetable_image = $row_array['vegetable_image'];
      $vegetable_content = $row_array['vegetable_content'];
     ?>

    <div class="banner" id="<?php echo $vegetable_title ?>">
      <br>
      <h3>Why Our Vegetables?</h3>
      <div class="header-line"></div>
      <br>
    </div>

    <div class="container-fluid" id="vegetables-products">
      <div class="row">
        <div class="col-sm-4">
          <img class="float-right prod-detImg" src=" <?php echo $vegetable_image ?> " alt="">
        </div>

        <div class="col odd">
          <h4 class="odd"> <?php echo $vegetable_title ?> </h4>
          <p> <?php echo $vegetable_content ?> </p>
        </div>
        <div class="col-sm-2">
          <!-- padding col -->
        </div>
      </div>

      <?php
        $result = $pdo->query("SELECT * FROM vegetables WHERE vegetable_id = '2'");

        $row_array = $result->fetch(PDO::FETCH_ASSOC);
        $vegetable_title = $row_array['vegetable_title'];
        $vegetable_image = $row_array['vegetable_image'];
        $vegetable_content = $row_array['vegetable_content'];
       ?>

      <div class="divider-products" id="<?php echo $vegetable_title ?>"></div>
      <br><br>

      <div class="row">
        <div class="col-sm-2">
          <!-- padding col -->
        </div>
        <div class="col even">
          <h4 class="even"> <?php echo $vegetable_title ?> </h4>
          <p> <?php echo $vegetable_content ?> </p>
        </div>
        <div class="col-sm-4">
          <img class="float-left prod-detImg" src=" <?php echo $vegetable_image ?> " alt="">
        </div>
      </div>

      <?php
        $result = $pdo->query("SELECT * FROM vegetables WHERE vegetable_id = '3'");

        $row_array = $result->fetch(PDO::FETCH_ASSOC);
        $vegetable_title = $row_array['vegetable_title'];
        $vegetable_image = $row_array['vegetable_image'];
        $vegetable_content = $row_array['vegetable_content'];
       ?>

      <div class="divider-products" id="<?php echo $vegetable_title ?>"></div>
      <br><br>

      <div class="row">
        <div class="col-sm-4">
          <img class="float-right prod-detImg" src=" <?php echo $vegetable_image ?> " alt="">
        </div>

        <div class="col odd">
          <h4 class="odd"> <?php echo $vegetable_title ?> </h4>
          <p> <?php echo $vegetable_content ?> </p>
        </div>
        <div class="col-sm-2">
          <!-- padding col -->
        </div>
      </div>
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
