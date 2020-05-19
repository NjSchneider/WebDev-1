<?php

  include_once('includes/connection.php');
  include_once('includes/response_courses.php');

  $response_course = new Response_Course;
  $response_courses = $response_course->fetch_all();

 ?>

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-icon-512x512.png">
    <title>Bad Guy Down</title>
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Lato:400,900|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
  </head>

  <body id="homepage" data-spy="scroll" data-target=".navBar" data-offset="60">
    <header>
      <nav class="navbar fixed-top navbar-expand-lg bg-dark">
        <a class="navbar-brand ml-4" href="index.php"><img src="images/bgd-logo-fix-white.png" alt="BGD" width="55"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="navbarNavDropdownMenuLink" data-toggle="dropdown" href="#" aria-haspopup="true" aroa-expanded="false">
                Courses
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarNavDropdownLink">
                <a class="dropdown-item" href="boss.php">B.o.S.S.</a>
                <a class="dropdown-item" href="ccw.php">Missouri CCW</a>
                <a class="dropdown-item" href="pistol.php">Pistol</a>
                <a class="dropdown-item" href="rifle.php">Rifle</a>
                <a class="dropdown-item" href="shotgun.php">Shotgun</a>
                <a class="dropdown-item" href="applied.php">Applied Courses</a>
                <a class="dropdown-item active" href="response.php">Tactical Response</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <div class="container-fluid course-header">
      <div class="container">
        <img class="course-header-image" src="images/admin-header.png" alt="">
      </div>
    </div>

    <div class="page">
    <div class="container-fluid course-banner">
      <h1>Tactical Response Training</h1>
      <div class="header-line"></div>
    </div>

      <div class="container-fluid course-article">
        <?php foreach($response_courses as $response_course) { ?>
        <div class="container course-info">
          <h2><?php echo $response_course['response_title'] ?></h2>
          <div class="header-line-left"></div>
          <br>
          <h4>Prerequisites:</h4>
          <ul class="learn-list">
            <?php
              $paragraph = $response_course['response_prerequisites'];
              $lines = str_replace(".","<li>", $paragraph);
              echo $lines;
             ?>
          </ul>
          <p>
            <?php echo nl2br($response_course['response_info']); ?>
          </p>
          <br>
          <div class="row">
            <div class="col-lg-6">
              <h5>You Will Learn:</h5>
              <div class="header-line-left"></div>
              <br>
              <ul class="learn-list">
                <?php
                  $paragraph = $response_course['response_learn'];
                  $lines = str_replace(".","<li>", $paragraph);
                  echo $lines;
                 ?>
              </ul>
            </div>
            <div class="col-lg-6">
              <h5>Required Equipment</h5>
              <div class="header-line-equipment"></div>
              <br>
              <ul class="equipment-list">
                <?php
                  $paragraph = $response_course['response_equipment'];
                  $lines = str_replace(".","<li>", $paragraph);
                  echo $lines;
                 ?>
              </ul>
            </div>
          </div>
          <?php
            $counter = $response_course['response_id'];
            $counter += 1;
           ?>
          <br id="pistol<?php echo $counter; ?>">
          <a class="btn btn-secondary download" href="attachments/New Registration and Waiver.pdf" download><i class="fas fa-file-download"></i> Download Registration and Waiver</a>
          <a class="btn btn-dark book-now" href="https://www.vagaro.com/badguydowntraining/classes?ig_fbb=true" target="_blank"><i class="fas fa-bookmark"></i> Book Now</a>
          <br>
          <br>
        </div>
      <?php } ?>
      </div>
    </div>

    <div class="carousel-course">
      <div class="row">
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="9000">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item active">
              <div class="d-none d-lg-block">
                <div class="slide-box">
                  <img src="images/pistol-boss-fix.jpg" alt="slide1">
                  <img src="images/teaching-boss.jpg" alt="slide1">
                  <img src="images/range-boss.jpg" alt="slide1">
                  <img src="images/course3.jpg" alt="slide1">
                </div>
              </div>
              <div class="d-none d-md-block d-lg-none">
                <div class="slide-box">
                  <img src="images/range-boss.jpg" alt="slide1">
                  <img src="images/teaching-boss.jpg" alt="slide1">
                  <img src="images/course3.jpg" alt="slide1">
                </div>
              </div>
              <div class="d-none d-sm-block d-md-none">
                <div class="slide-box">
                  <img src="images/course3.jpg" alt="slide1">
                  <img src="images/range-boss.jpg" alt="slide1">
                </div>
              </div>
              <div class="d-block d-sm-none">
                <img class="d-block w-100" src="images/course3.jpg" alt="slide1">
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-none d-lg-block">
                <div class="slide-box">
                  <img src="images/pistol-boss-fix.jpg" alt="slide2">
                  <img src="images/teaching-boss.jpg" alt="slide2">
                  <img src="images/range-boss.jpg" alt="slide2">
                  <img src="images/course3.jpg" alt="slide2">
                </div>
              </div>
              <div class="d-none d-md-block d-lg-none">
                <div class="slide-box">
                  <img src="images/pistol-boss-fix.jpg" alt="slide2">
                  <img src="images/teaching-boss.jpg" alt="slide2">
                  <img src="images/range-boss.jpg" alt="slide2">
                </div>
              </div>
              <div class="d-none d-sm-block d-md-none">
                <div class="slide-box">
                  <img src="images/range-boss.jpg" alt="slide2">
                  <img src="images/teaching-boss.jpg" alt="slide2">
                </div>
              </div>
              <div class="d-block d-sm-none">
                <img class="d-block w-100" src="images/teaching-boss.jpg" alt="slide2">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <footer class="page-footer font-small mdb-color pt-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left mt-3 pb-3">
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4">
            <h6 class="text-uppercase font-weight-bold">Bad Guy Down</h6>
            <div class="footer-line"></div>
            <br>
            <p style="width: 80%">
              Our Mission at BGD is to prepare and train upstanding citizens to protect themselves,
              their families, etc from criminals. We provide Real Training for the Good guys.
            </p>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4 footer-courses">
            <h6 class="text-uppercase ont-weight-bold">Courses</h6>
            <div class="footer-line"></div>
            <br>
            <p>
              <a href="boss.php">Basics of Safe Shooting (B.o.S.S.)</a>
            </p>
            <p>
              <a href="ccw.php">Concealed Carry Permit Course (CCW)</a>
            </p>
            <p>
              <a href="shotgun.php">Shotgun Home Defense (SHD)</a>
            </p>
            <p>
              <a href="pistol.php#pistol-chart">Pistol Progression Chart</a>
            </p>
            <p>
              <a href="rifle.php#rifle-chart">Rifle Progression Chart</a>
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none">
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-4">
            <h6 class="text-uppercase font-weight-bold">Quick links</h6>
            <div class="footer-line"></div>
            <br>
            <p>
              <a href="index.php">Home</a>
            </p>
            <p>
              <a href="about.php">About</a>
            </p>
            <p>
              <a href="contact.php">Contact</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <div class="footer-line-contact"></div>
            <br>
            <p>
              <i class="fas fa-home mr-3"></i> 205 E Main St Miller, Missouri
            </p>
            <p>
              <i class="fas fa-envelope mr-3"></i> <a href="mailto:badguydown@gmail.com">badguydown@gmail.com</a>
            <p>
              <i class="fas fa-phone mr-3"></i> (417) 606-0163
            </p>
          </div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="col-md-7 col-lg-8">
            <p class="text-center text-md-left">
              <small>
                © 2018 Copyright:
                <strong> Nick Schneider</strong>
              </small>
            </p>
          </div>
          <div class="col-md-5 col-lg-4 ml-lg-0">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/BadGuyDownTraining/?ref=page_internal" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1">
                    <strong>Check us out on Facebook <i class="fab fa-facebook-f fa-2x"></i></strong>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 30)
      });

      $(window).scroll(function() {
        $('course-header-image').toggleClass('scrolled', $(this).scrollTop() > 500)
      });

      $(window).scroll(function() {
        if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
          document.getElementById("myBtn").style.display = "block";
        }
        else{
          document.getElementById("myBtn").style.display = "none";
        }
        if(document.body.scrollTop > 1700 || document.documentElement.scrollTop > 1700){
          document.getElementById("myBtn").style.display = "none";
        }
      });

      $(window).scroll(function() {
        $(".slideanim").each(function() {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    </script>
  </body>

</html>
