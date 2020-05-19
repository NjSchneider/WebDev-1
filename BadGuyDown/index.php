<?php

  include_once('includes/connection.php');
  include_once('includes/guest_instructors.php');

  $guest_instructor = new Guest_Instructor;
  $guest_instructors = $guest_instructor->fetch_all();

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
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Lato:400,900|Roboto|Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
  </head>

  <body id="homepage" data-spy="scroll" data-target=".navBar" data-offset="60">
    <header>
      <nav class="navbar fixed-top navbar-expand-lg bg-dark">
        <a class="navbar-brand ml-4" href="#"><img src="images/bgd-logo-fix-white.png" alt="BGD" width="55"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarNavDropdownMenuLink" data-toggle="dropdown" href="#" aria-haspopup="true" aroa-expanded="false">
                Courses
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarNavDropdownLink">
                <a class="dropdown-item" href="boss.php">B.o.S.S.</a>
                <a class="dropdown-item" href="ccw.php">Missouri CCW</a>
                <a class="dropdown-item" href="pistol.php">Pistol</a>
                <a class="dropdown-item" href="rifle.php">Rifle</a>
                <a class="dropdown-item" href="shotgun.php">Shotgun</a>
                <a class="dropdown-item" href="applied.php">Applied Courses</a>
                <a class="dropdown-item" href="response.php">Tactical Response</a>
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

    <div class="jumbotron">
      <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="8000">
        <div class="carousel-inner" id="landing-carousel-inner">
          <div class="carousel-item active item1">
            <div class="container">
              <img class="d-block w-100 landing-slide-img" src="thing3.jpg" alt="slide1">
              <div class="slide1">
                <div class="slide1-info">
                  <h2>Training For the Good Guys</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item item2">
            <div class="container">
              <img class="d-block w-100 landing-slide-img" src="thing3.jpg" alt="slide2">
              <div class="slide2">
                <h1>FAMILY FRIENDLY</h1>
                <div class="header-line-landing"></div>
                <p>
                  At BGD, we are tired of good, hard-working families suffering at the hands of drugged-out violent criminals.
                  And we hate to say it, but with so much civil unrest, economic uncertainty, religious extremism, political
                  craziness and rampant addiction grinding away at our communities, the violence is here and it is intensifying.
                  We are doing something about that.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item item3">
            <div class="container">
              <img class="d-block w-100 landing-slide-img" src="thing3.jpg" alt="slide3">
              <div class="slide3">
                <h1>Your Life Matters. Defend it</h1>
                <div class="header-line-landing" id="line-slide3"></div>
                <p>
                  Our Mission at BGD is to prepare and train upstanding citizens to protect themselves, their families, etc from criminals. We provide Real Training for the Good guys.
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
        <a href="#home-why"><i class="fas fa-chevron-circle-down fa-3x" id="landing-button"></i></a>
      </div>
    </div>

    <div class="container-fluid banner" id="home-why">
      <br>
      <h1>Why BGD?</h1>
      <div class="header-line"></div>
    </div>

    <div class="container-fluid">
      <div id="why-info">
        <p>
          Bad Guy Down Training, "Real Training for the Good Guys."
          A company that specializes in firearms training including Missouri Concealed Carry Permits.
        </p>
        <h5 style="text-decoration: underline;">Bad Guy Down exists for 2 reasons:</h5>
        <ol>
          <li>We believe everyone has a God-given right to real self-protection.</li>
          <li>We believe everyone should be able to afford it.</li>
        </ol>
        <p>
          For 3 years now, we’ve been delivering on a promise to provide just that: Real,
          combat-proven and effective shooting techniques and tactics that anyone can afford. Period.
        </p>
        <p>
          The techniques and tactics we teach have not been learned from YouTube videos. They come from
          years of training and practice with some of the best operators on the planet: Green Berets, Navy SEALs,
          Delta, MARSOC, SWAT, Force Recon, ICE, State Department, PMC, and more.
        </p>
        <p>
          If you are ready to learn how to use a gun effectively and with confidence, or if you are an armed professional
          and you are ready to up your skill-set, come check us out.
        </p>
        <p>
          Come get some “Real Training for the Good Guys.”
        </p>
      </div>
    </div>

    <div class="container-fluid" id="courses">
      <h1>Courses</h1>
      <div class="header-line" style="border-color: white;"></div>
      <br>
      <div class="container-fluid banner" id="required-course">
        <h4>REQUIRED COURSE: <a href="boss.php" >B.o.S.S. Course</a></h4>
        <p>
          The B.o.S.S. Course teaches shooters proper safety, conduct, and ettiquete while carrying and using a firearm on the range and in public.
          This course is required prior to attending any other shooting courses. Safety is the top goal at BGD. We want everyone to have a safe and
          fun time every time they are here.
        </p>
        <a href="https://www.vagaro.com/badguydowntraining/classes?ig_fbb=true" target="_blank" class="btn btn-secondary" id="home-BoSS-link">Book Your B.o.S.S. Class</a>
      </div>
      <div class="row home-courses">
        <div class="col-sm-4">
          <div class="card home-card">
            <img class="card-img" src="images/course1.jpg" alt="course1">
            <div class="card-body">
              <p>
                <a href="ccw.php">Missouri CCW</a>
              </p>
              <p>
              <a href="pistol.php">Pistol 1, 2, & 3</a>
              </p>
              <p>
                <a href="rifle.php">Rifle 1, 2, & 3</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card home-card">
            <img class="card-img" src="images/course2.jpg" alt="course2">
            <div class="card-body">
              <p>
                <a href="shotgun.php">Home Defense Shotgun</a>
              </p>
              <p>
                <a href="ccw.php">Deep Concealment</a>
              </p>
              <p>
                <a href="response.php">Vehicle Counter-Ambush Tactics</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card home-card">
            <img class="card-img" src="images/course3.jpg" alt="course3">
            <div class="card-body">
              <p>
                <a href="response.php">Tactical Response to an Active Killer</a>
              </p>
              <p>
                <a href="response.php">Team Tactics 1 & 2</a>
              </p>
              <p>
                <a href="applied.php">Customizable Private Training</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="guest-instructors">
      <h1>Guest Instructors</h1>
      <div class="header-line"></div>
      <br>
      <?php foreach($guest_instructors as $guest_instructor){ ?>
      <div class="card mb-3" style="max-width: fit-content; max-height: fit-content;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?php echo $guest_instructor['instructor_image'] ?>" class="card-img" alt="<?php echo $guest_instructor['instructor_name']; ?>">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="min-height: fit-content;">
              <h4 class="card-title" style="text-decoration: underline;"><?php echo $guest_instructor['instructor_name']; ?></h4>
              <p class="card-text"><?php echo $guest_instructor['instructor_info'] ?></p>
              <p class="card-text"><small class="text-muted"><a class="btn btn-secondary home-book-now" href="<?php echo $guest_instructor['instructor_link']; ?>">Book a class with <?php echo $guest_instructor['instructor_name']; ?></a></small></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
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
            <a class="btn btn-dark book-footer" href="https://www.vagaro.com/badguydowntraining/classes?ig_fbb=true" target="_blank"><i class="fas fa-bookmark"></i> Book With Us</a>
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
