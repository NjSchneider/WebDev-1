<?php

  session_start();

  include_once('../../includes/connection.php');

  if(isset($_SESSION['logged_in'])){
    if(isset($_POST['title'], $_POST['content'])){
      $title = $_POST['title'];
      $content = nl2br($_POST['content']);

      if(empty($title) or empty($content)){
        $error = 'All field are required!';
      } else{
        $query = $pdo->prepare('INSERT INTO articles(article_title, article_content, article_timestamp) VALUES(?, ?, ?)');

        $query->bindValue(1, $title);
        $query->bindValue(2, $content);
        $query->bindValue(3, time());

        $query->execute();

        header('Location: blog.php');
      }
    }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Admin Area | Blog Article</title>
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
            <a class="nav-link" href="../home/home.php">Home Page</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Pages</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="..fruits/fruits.php">Fruits</a>
              <a class="dropdown-item" href="../vegetables/vegetables.php">Vegetables</a>
              <a class="dropdown-item" href="../poultry/poultry.php">Poultry</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"> <a class="nav-link" href="#">Welcome, Admin</a></li>
          <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1><span><i class="fas fa-cog"></i></span>Dashboard <small>Manage Your Site</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active"><a href="blog.php">Blog</a></li>
          <li class="breadcrumb-item active">Add Article</li>
        </ol>
      </div>
    </section>

    <h1 style="text-align: center;">Admin Blog Post</h1>
    <div class="container" id="blog-post">
      <h4 style="text-align: center;">Add Article</h4>

      <?php if(isset($error)){ ?>
        <small style="color: red"> <?php echo $error; ?> </small>
        <br><br>
      <?php } ?>

      <form id="add-article" action="add.php" method="post" autocomplete="off">
        <input type="text" name="title" placeholder="Title">
        <br><br>
        <textarea name="content" rows="25" cols="80" placeholder="Content"></textarea>
        <br><br>
        <input type="submit" value="Post Article">
      </form>
      <a class="btn btn-secondary" href="blog.php">&larr; Back</a>
    </div>

    <footer class="page-footer" id=footer>
      <div class="container-fluid">
        <p>Copyright Nick Schneider, &copy; 2019</p>
      </div>

    </footer>
  </body>

</html>

<?php
  } else{
    header('Location: index.php');
  }

 ?>
