<?php

  session_start();

  include_once('../../includes/connection.php');

  if(isset($_SESSION['logged_in'])){
    if(isset($_POST['submit'])){
      $title = nl2br($_POST['title']);
      $tag = $_POST['tag'];
      $prerequisites = nl2br($_POST['prerequisites']);
      $info = nl2br($_POST['info']);
      $learn = nl2br($_POST['learn']);
      $equipment = nl2br($_POST['equipment']);
      $timestamp = time();

      if(empty($title) or empty($learn)){
        $error = 'All field are required!';
      } else{
        $query = $pdo->prepare('INSERT INTO rifle_courses(rifle_title, rifle_tag, rifle_prerequisites, rifle_info, rifle_learn, rifle_equipment, update_timestamp) VALUES(?, ?, ?, ?, ?, ?, ?)');

        $query->bindValue(1, $title);
        $query->bindValue(2, $tag);
        $query->bindValue(3, $prerequisites);
        $query->bindValue(4, $info);
        $query->bindValue(5, $learn);
        $query->bindValue(6, $equipment);
        $query->bindValue(7, $timestamp);

        $query->execute();

        header('Location: rifle.php');
      }
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
  <title>Admin | Add Rifle Course</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="rifle.php">Rifle <span class="sr-only">(current)</span></a>
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
            <h1><span><img src="../../images/admin-header.png" height="100px"></span> Admin Access <small> Rifle Courses</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="rifle.php">Rifle</a></li>
          <li class="breadcrumb-item">Add Course</li>
        </ol>
      </div>
    </section>

    <section class="main">
      <div class="container-fluid add-course">
        <h2 style="text-align: center;">Add Rifle Course</h2>
        <div class="header-line"></div>

        <?php if(isset($error)){ ?>
          <small style="color: red"> <?php echo $error; ?> </small>
          <br><br>
        <?php } ?>

        <form id="add-article" action="" method="post" autocomplete="off">
          <label for="title"><h5><strong>Course Title</strong></h5></label>
          <textarea name="title" rows="1" cols="57" placeholder="Course Title"></textarea>
          <br>
          <br>
          <label for="tag"><h5><strong>Course Tag</strong></h5></label>
          <input type="text" name="tag" placeholder="Course Tag">
          <br>
          <br>
          <label for="prerequisites"><h5><strong>Prerequisites</strong></h5></label>
          <textarea name="prerequisites" rows="4" cols="60" placeholder=".Course Prerequisites &#10;.Example &#10;.Example"></textarea>
          <br>
          <br>
          <label for="title"><h5><strong>Course Info</strong></h5></label>
          <textarea name="info" rows="6" cols="70" placeholder="Course Information"></textarea>
          <br>
          <br>
          <div class="row">
            <div class="col-md-6">
              <label for="learn"><h5><strong>What will be Learned</strong></h5></label>
              <textarea name="learn" rows="12" cols="70" placeholder=".Course Coverage &#10;.Example &#10;.Example &#10;.Example &#10;.Example"></textarea>
            </div>
            <div class="col-md-6">
              <label for="equipment"><h5><strong>Equipment Required</strong></h5></label>
              <textarea name="equipment" rows="12" cols="70" placeholder=".Equipment Needed &#10;.Example &#10;.Example &#10;.Example &#10;.Example"></textarea>
            </div>
          </div>
          <br>
          <br>
          <input type="submit" name="submit" value="Post Course">
        </form>
        <br>
        <a class="btn btn-secondary" href="rifle.php">&larr; Back</a>
      </div>
    </section>

    <footer class="page-footer" id=footer>
      <div class="container-fluid">
        <p>Copyright Nick Schneider, &copy; 2019</p>
      </div>
    </footer>

    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>

<?php
  } else{
    header('Location: ../admin/index.php');
  }
 ?>
