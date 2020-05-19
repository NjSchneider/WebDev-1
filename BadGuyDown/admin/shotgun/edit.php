<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/shotgun_courses.php');


  if(isset($_SESSION['logged_in'])){
    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $result = $pdo->query("SELECT * FROM shotgun_courses WHERE shotgun_id = '$id'");

      $row_array = $result->fetch(PDO::FETCH_ASSOC);
      $shotgun_title = $row_array['shotgun_title'];
      $shotgun_tag = $row_array['shotgun_tag'];
      $shotgun_prerequisites = $row_array['shotgun_prerequisites'];
      $shotgun_info = $row_array['shotgun_info'];
      $shotgun_learn = $row_array['shotgun_learn'];
      $shotgun_equipment = $row_array['shotgun_equipment'];
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
  <title>Admin | Edit Shotgun Course</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="shotgun.php">Shotgun <span class="sr-only">(current)</span></a>
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
            <h1><span><img src="../../images/admin-header.png" height="100px"></span> Admin Access <small> Shotgun Courses</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="shotgun.php">Shotgun</a></li>
          <li class="breadcrumb-item">Edit</li>
        </ol>
      </div>
    </section>



    <section class="main">
      <div class="container-fluid add-course">
        <span class="float-left"><a class="btn btn-secondary" href="shotgun.php">&larr; Cancel</a></span>
        <h2 style="text-align: center;">Edit <?php echo $shotgun_tag; ?></h2>
        <div class="header-line"></div>

        <?php if(isset($error)){ ?>
          <small style="color: red"> <?php echo $error; ?> </small>
          <br><br>
        <?php } ?>

        <form class="add-course" action="update.php" method="post" autocomplete="off">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <label for="title"><h5><strong>Course Name</strong></h5></label>
          <textarea name="title" rows="1" cols="57"><?php echo $shotgun_title; ?></textarea>
          <br>
          <br>
          <label for="tag"><h5><strong>Course Tag</strong></h5></label>
          <input type="text" name="tag" value="<?php echo $shotgun_tag; ?>">
          <br>
          <br>
          <label for="prerequisites"><h5><strong>Prerequisites</strong></h5></label>
          <textarea name="prerequisites" rows="4" cols="60"><?php echo $shotgun_prerequisites; ?></textarea>
          <br>
          <br>
          <label for="title"><h5><strong>Course Info</strong></h5></label>
          <textarea name="info" rows="6" cols="70"><?php echo $shotgun_info; ?></textarea>
          <br>
          <br>
          <div class="row">
            <div class="col-md-6">
              <label for="learn"><h5><strong>What will be Learned</strong></h5></label>
              <textarea name="learn" rows="12" cols="70"><?php echo $shotgun_learn; ?></textarea>
            </div>
            <div class="col-md-6">
              <label for="equipment"><h5><strong>Equipment Required</strong></h5></label>
              <textarea name="equipment" rows="12" cols="70"><?php echo $shotgun_equipment; ?></textarea>
            </div>
          </div>
          <br>
          <input type="submit" name="submit" value="Update Course">
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
    header('Location: ../admin/index.php');
  }
?>
