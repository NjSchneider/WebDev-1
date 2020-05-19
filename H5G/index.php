<?php

  include_once('includes/connection.php');
  include_once('includes/products.php');

  $product = new Product;
  $products = $product->fetch_all();


 ?>
<!DOCTYPE html>

 <html lang="en">

   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <title>Harvest 505 Gardens</title>
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

     <div class="container-fluid page">
       <div class="container-fluid" id="landing-info">
         <div class="row">
           <div class="col-sm-7" id="landing-card">
             <div class"col responsive-landingCard">
               <div class="card">
                 <img id="landing-image" src="images/landing.jpg" alt="landscape">
                 <div class="card-body">
                   <h1>Harvest 505 Gardens</h1>
                   <p>
                     About ten years ago my wife, Sharon, and I decided we wanted to live on a homestead for several reasons.
                     One, we believe great health is related to great quality food, physical and mental activity, and lower stress.
                     We love gardening, quality dining, and learning to be more self-sufficient. Sharon loves small animals and cooking from scratch;
                     my son, Peter, and I enjoy the meals. We strive to keep our medical expenses, taxes, and fitness membership fees low, so five years
                     ago we purchased a 19 acre homestead in rural Polk County, Missouri. As we built out our beds and orchards, we discovered new muscles,
                     learned so much through success and failure, provided our family with 70% of its food and medicine, and enjoyed deliciously fresh meals
                     every day that consistently surpass our wildest expectations. Looking forward, we hope to share the harvest, healthy lifestyle and
                     knowledge with others in the community.
                   </p>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-sm-1 fullScreen">
           </div>
           <div class="col prod-col">
             <div id="current-products">
               <h3>Current Offers</h3>
               <div class="header-line"></div>
               <br>
                   <?php foreach($products as $product){ ?>
                   <div class="card mb-3">
                     <div class="row no-gutters">
                       <div class="col-sm-4">
                         <img  class="prod-img" src="<?php echo $product['product_image'] ?>" alt="stitch">
                       </div>
                       <div class="col-sm-8">
                         <div class="card-body">
                           <h5> <?php echo $product['product_title'] ?> </h5>
                           <p class="card-text">
                             <?php echo $product['product_content'] ?>
                           </p>
                           <a href="<?php echo $product['product_link'] ?>">Find Out More</a>
                         </div>
                       </div>
                     </div>
                   </div>
                   <?php } ?>
                 </div>
               </div>
           </div>
         </div>
       </div>
     </div>

       <div class="divider"></div>

       <div class="container-fluid banner">
         <br>
         <h1>Where are we located?</h1>
         <div class="header-line"></div>
       </div>
       <div class="container-fluid" id="location-info">
         <div class="contain-def">
         <div class="row">
           <div class="col temp"></div>
           <div class="col-sm-3">
             <div class="container" id="directions">
               <div class="row">
                 <div class="col info">
                   <h3>Visit Us</h3>
                   <div class="header-line-left"></div>
                   <br>
                   <p>
                     <a href="https://www.google.com/maps/dir//37.6475307,-93.54286/@37.647531,-93.54286,16z?hl=en" target="_blank"><i class="fas fa-home"></i> 505 State Hwy BB Fair Play, MO 65649</a>
                   </p>
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col info" id="contact-us">
                   <h3>Contact Us</h3>
                   <div class="header-line-left"></div>
                   <br>
                   <p>
                     <i class="fas fa-phone"></i> 555-555-5555
                   </p>
                   <p>
                     <a href="mailto: something@gmail.com"><i class="fas fa-envelope"></i> something@gmail.com</a>
                   </p>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.0709946415345!2d-93.54504868428147!3d37.64753492724211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c5c30ae5578b15%3A0x7fe1c7cbcb3ea331!2s505+State+Hwy+BB%2C+Fair+Play%2C+MO+65649!5e0!3m2!1sen!2sus!4v1556118463016!5m2!1sen!2sus"
               width="600" height="450" allowfullscreen></iframe>
           </div>
           <div class="col temp"></div>
         </div>
       </div>

         <!-- RESPONSIVE LAYOUT {START} -->
         <div class="contain-responsive">
           <div class="row">
             <div class="col temp"></div>
             <div class="container" id="directions">
             <div class="row">


                   <div class="col info">
                     <h3>Visit Us</h3>
                     <div class="header-line-left"></div>
                     <p class="contact-p">
                       <i class="fas fa-home"></i>
                       505 State Hwy BB Fair Play
                     </p>
                     <p class="contact-p">MO 65649</p>
                   </div>

                   <div class="col info">
                     <h3>Contact Us</h3>
                     <div class="header-line-left"></div>
                     <p class="contact-p">
                       <i class="fas fa-phone"></i>
                       555-555-5555
                     </p>
                     <p class="contact-p">
                       <i class="fas fa-envelope"></i>
                       <a href="mailto: something@gmail.com">something@gmail.com</a>
                     </p>
                   </div>
               </div>
             </div>
             <div class="col-lg-6 map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.0709946415345!2d-93.54504868428147!3d37.64753492724211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c5c30ae5578b15%3A0x7fe1c7cbcb3ea331!2s505+State+Hwy+BB%2C+Fair+Play%2C+MO+65649!5e0!3m2!1sen!2sus!4v1556118463016!5m2!1sen!2sus"
                 width="600" height="450" allowfullscreen></iframe>
             </div>
             <div class="col temp"></div>
           </div>
         </div>
         <!-- RESPONSIVE LAYOUT {END} -->
       </div>

     <div class="container-fluid" id="process-info">
       <h2>Organics Info</h2>
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


     <div class="container-fluid">
       <div class="container-fluid banner">
         <h1>Our Future</h1>
         <div class="header-line"></div>
       </div>
       <div class="container-fluid" id="coming-soon">
          <p>
            About ten years ago my wife, Sharon, and I decided we wanted to live on a homestead for several reasons. One, we believe great health is
            related to great quality food, physical and mental activity, and lower stress. We love gardening, quality dining, and learning to be more
            self-sufficient. Sharon loves small animals and cooking from scratch; my son, Peter, and I enjoy the meals. We strive to keep our medical expenses,
            taxes, and fitness membership fees low, so five years ago we purchased a 19 acre homestead in rural Polk County, Missouri. As we built out our beds
            and orchards, we discovered new muscles, learned so much through success and failure, provided our family with 70% of its food and medicine, and enjoyed
            deliciously fresh meals every day that consistently surpass our wildest expectations. Looking forward, we hope to share the harvest, healthy lifestyle and
            knowledge with others in the community.
          </p>
       </div>

       <div class="container-fluid" id="affiliated" style="display:none;">
         <div class="row">
           <div class="col">
             <img src="images/pond.jpg" alt="stitch">
             <div class="card">
               <div class="card-body">
                 <h5>Business/Farm Name</h5>
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis ligula vel congue ullamcorper.
                   Phasellus iaculis erat nec consequat semper. Nulla ac nisi condimentum, condimentum risus id, accumsan odio.
                   Sed a libero consectetur, ullamcorper risus sed, luctus turpis.
                 </p>
                 <a href="#">
                   <h5>Come Visit</h5>
                 </a>
               </div>
             </div>
           </div>
           <div class="col">
             <img src="images/pond.jpg" alt="stitch">
             <div class="card">
               <div class="card-body">
                 <h5>Business/Farm Name</h5>
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis ligula vel congue ullamcorper.
                   Phasellus iaculis erat nec consequat semper. Nulla ac nisi condimentum, condimentum risus id, accumsan odio.
                   Sed a libero consectetur, ullamcorper risus sed, luctus turpis.
                 </p>
                 <a href="#">
                   <h5>Come Visit</h5>
                 </a>
               </div>
             </div>
           </div>
           <div class="col">
             <img src="images/pond.jpg" alt="stitch">
             <div class="card">
               <div class="card-body">
                 <h5>Business/Farm Name</h5>
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis ligula vel congue ullamcorper.
                   Phasellus iaculis erat nec consequat semper. Nulla ac nisi condimentum, condimentum risus id, accumsan odio.
                   Sed a libero consectetur, ullamcorper risus sed, luctus turpis.
                 </p>
                 <a href="#">
                   <h5>Come Visit</h5>
                 </a>
               </div>
             </div>
           </div>
         </div>
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
