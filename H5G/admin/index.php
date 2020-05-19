<?php

  session_start();

  include_once('../includes/connection.php');

  if(isset($_SESSION['logged_in'])){
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home/home.php">Home Page</a>
          </li>
          <li cl
          <li class="nav-item">
            <a class="nav-link" href="blog/blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Pages</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="fruits/fruits.php">Fruits</a>
              <a class="dropdown-item" href="vegetables/vegetables.php">Vegetables</a>
              <a class="dropdown-item" href="poultry/poultry.php">Poultry</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"> <a class="nav-link" href="#">Welcome, Admin</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <h1><span><i class="fas fa-cog"></i></span>Dashboard<small> Manage Site Pages</small></h1>
          </div>
          <div class="col-md-2 create">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create Content
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="add.php">Add Blog Post</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active main-color-bg">
                <span><i class="fas fa-cog"></i></span> Dashboard
              </a>
              <a href="index.php" class="list-group-item list-group-item-action"><span><i class="fas fa-file"></i></span> Pages <span class="badge-pill">6</span></a>
              <a href="blog/blog.php" class="list-group-item list-group-item-action"><span><i class="fas fa-comment-alt"></i></i></span> Posts <span class="badge-pill"></span></a>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <h3 class="card-header main-color-bg">Pages</h3>
              <div class="card-body">
                <table class="table table-striped table-dark table-hover mt-4">
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Published</th>
                      <th scope="col">Created</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Home</th>
                      <td><span><i class="fas fa-check"></i></span></td>
                      <td>Dec 12, 2016</td>
                      <td><a class="btn btn-primary" href="home/home.php">Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">About Page</th>
                      <td><span><i class="fas fa-check"></i></span></td>
                      <td>Dec 13, 2019</td>
                      <td><a class="btn btn-primary" href="about.php">Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Fruits Page</th>
                      <td><span><i class="fas fa-check"></i></span></td>
                      <td>Dec 13, 2019</td>
                      <td><a class="btn btn-primary" href="fruits/fruits.php">Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Vegetables Page</th>
                      <td><span><i class="fas fa-check"></i></span></td>
                      <td>Dec 13, 2019</td>
                      <td><a class="btn btn-primary" href="vegetables/vegetables.php">Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Poultry Page</th>
                      <td><span><i class="fas fa-check"></i></span></td>
                      <td>Dec 13, 2019</td>
                      <td><a class="btn btn-primary" href="poultry/poultry.php">Edit</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="page-footer" id=footer>
      <p>Copyright Nick Schneider, &copy; 2019</p>
    </footer>

    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>

<?php
  } else{
    if(isset($_POST['username'], $_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      if(empty($username) or empty($password)){
        $error = 'All fields are required!';
      } else{
        $query = $pdo->prepare('SELECT * FROM users WHERE user_name = ? and user_password = ?');

        $query->bindValue(1, $username);
        $query->bindValue(2, $password);

        $query->execute();

        $num = $query->rowCount();

        if($num == 1){
          $_SESSION['logged_in'] = true;
          header('Location: index.php');
          exit();
        } else{
          $error = 'Incorrect Username or Password!';
        }
      }
    }

?>
 <html lang="en" dir="ltr">

   <head>
     <meta charset="utf-8">
     <title>Admin Login</title>
     <link rel="stylesheet" href="../assets/styles.css">
   </head>

   <body>
     <h1>Admin Login</h1>
     <div class="container">
       <h3><a class="btn btn-secondary" href="../index.php">&larr; To Site</a></h3>

      <?php if(isset($error)){ ?>
        <small style="color: red"> <?php echo $error; ?> </small>
        <br><br>
      <?php } ?>

       <form action="index.php" method="post">
         <input type="text" name="username" placeholder="Username">
         <input type="password" name="password" placeholder="Password">
         <input type="submit" value="Login">
       </form>
   </div>
   </body>

 </html>
<?php
  }
?>
