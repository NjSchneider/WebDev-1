<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/guest_instructors.php');


  if(isset($_SESSION['logged_in'])){
    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $result = $pdo->query("SELECT * FROM guest_instructors WHERE instructor_id = '$id'");

      $row_array = $result->fetch(PDO::FETCH_ASSOC);
      $instructor_name = $row_array['instructor_name'];
      $instructor_image = $row_array['instructor_image'];
      $instructor_info = $row_array['instructor_info'];
      $instructor_link = $row_array['instructor_link'];
    }

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="../../images/logo-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../images/logo-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../images/logo-icon-512x512.png">
  <title>Admin | Edit Guest Instructor</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles.css">
</head>

  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../boss/boss.php">B.o.S.S. <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ccw/ccw.php">C.C.W. <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pistol/pistol.php">Pistol <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../rifle/rifle.php">Rifle <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../shotgun/shotgun.php">Shotgun <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../applied/applied.php">Applied Courses <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../response/response.php">Response/Tactical <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1><span><img src="../../images/admin-header.png" height="100px"></span> Admin Access <small> Guest Instructors</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="../index.php">Guest Instructors</a></li>
          <li class="breadcrumb-item">Edit</li>
        </ol>
      </div>
    </section>

    <section class="main">
      <div class="container-fluid add-course">
        <span class="float-left"><a class="btn btn-secondary" href="../index.php">&larr; Cancel</a></span>
        <h2 style="text-align: center;">Edit <?php echo $instructor_name; ?></h2>
        <div class="header-line"></div>

        <?php if(isset($error)){ ?>
          <small style="color: red"> <?php echo $error; ?> </small>
          <br><br>
        <?php } ?>

        <form class="edit-course" action="update.php" method="post" autocomplete="off">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <label for="name"><h5><strong>Instructor's Name</strong></h5></label>
          <input name="name" value="<?php echo $instructor_name; ?>"></input>
          <br>
          <br>
          <label for="image"><h5><strong>Instructor Image/Photo</strong></h5></label>
          <input type="text" name="image" value="<?php echo $instructor_image; ?>">
          <br>
          <br>
          <label for="info"><h5><strong>Instructor Info</strong></h5></label>
          <textarea name="info" rows="8" cols="60"><?php echo $instructor_info; ?></textarea>
          <br>
          <br>
          <label for="link"><h5><strong>Booking Link</strong></h5></label>
          <textarea type="text" rows="1" cols="60"><?php echo $instructor_link; ?></textarea>
          <br>
          <br>
          <input type="submit" name="submit" value="Update Instructor Info">
        </form>
        <br>
      </div>
    </section>

    <footer class="page-footer" id=footer>
      <div class="container-fluid">
        <p>Copyright Nick Schneider, &copy; 2019</p>
      </div>
    </footer>

<?php
  } else{
    header('Location: ../index.php');
  }
?>
