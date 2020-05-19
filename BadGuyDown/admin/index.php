<?php

  session_start();

  include_once('../includes/connection.php');
  include_once('../includes/guest_instructors.php');

  if(isset($_SESSION['logged_in'])){

    $guest_instructor = new Guest_Instructor;
    $guest_instructors = $guest_instructor->fetch_all();

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/logo-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/logo-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/logo-icon-512x512.png">
    <title>Admin | Dashboard</title>
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
            <a class="nav-link" href="boss/boss.php">B.o.S.S. <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ccw/ccw.php">C.C.W. <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pistol/pistol.php">Pistol <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rifle/rifle.php">Rifle <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shotgun/shotgun.php">Shotgun <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="applied/applied.php">Applied Courses <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="response/response.php">Response/Tactical <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1><span><img src="../images/admin-header.png" height="100px"></span> Admin Access<small> Dashboard</small></h1>
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
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active main-color-bg">
                <span class="quick-add"><i class="fas fa-cogs"></i></span> <strong>Quick Access</strong>
              </a>
              <a href="index.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-object-group"></i></span> Course Groups <small class="float-right mr-4">7</small></a>
              <a href="ccw/add.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-file-signature"></i></span> Add CCW Course <span class="badge-pill"></span></a>
              <a href="pistol/add.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-file-signature"></i></span> Add Pistol Course <span class="badge-pill"></span></a>
              <a href="rifle/add.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-file-signature"></i></span> Add Rifle Course <span class="badge-pill"></span></a>
              <a href="shotgun/add.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-file-signature"></i></span> Add Shotgun Course <span class="badge-pill"></span></a>
              <a href="response/add.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-file-signature"></i></span> Add Tactical Response Course <span class="badge-pill"></span></a>
              <a href="guest_instructors/add.php" class="list-group-item list-group-item-action"><span class="float-left"><i class="fas fa-file-signature"></i></span> Add Guest Instructor <span class="badge-pill"></span></a>
            </div>
            <div class="card mt-2" id="guest-instructors">
              <h3 class="card-header main-color-bg text-left">Guest Instructors</h3>
              <div class="card-body">
                <table class="table table-striped table-dark table-hover mt-2">
                  <thead>
                    <tr>
                      <th scope="col" class="course-title"><h4><strong>Instructor</strong></h4></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Added</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($guest_instructors as $guest_instructor){ ?>
                    <tr>
                      <th scope="row"><?php echo $guest_instructor['instructor_name'] ?></th>
                      <td><a class="btn btn-secondary edit" href="guest_instructors/edit.php?id=<?php echo $guest_instructor['instructor_id']; ?>"><span class="float-left"><i class="fas fa-pen"></i></span> Edit</a></td>
                      <td><a class="btn btn-danger delete" href="guest_instructors/delete.php?id=<?php echo $guest_instructor['instructor_id']; ?>"><span class="float-left"><i class="fas fa-eraser"></i></span> Delete</a></td>
                      <td><?php echo date('m/d/Y', $guest_instructor['update_timestamp']) ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-header main-color-bg table-header">Course Pages</h3>
              <div class="card-body">
                <table class="table table-striped table-dark table-hover mt-4">
                  <thead>
                    <tr>
                      <th scope="col" class="course-title"><h4><strong>Courses</strong></h4></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">B.o.S.S. Course</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="boss/boss.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">CCW Courses</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="ccw/ccw.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Pistol Courses</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="pistol/pistol.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Rifle Courses</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="rifle/rifle.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Shotgun Courses</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="shotgun/shotgun.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Applied Courses</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="applied/applied.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">Tactical Response Courses</th>
                      <td><a class="btn btn-secondary edit-dashboard" href="response/response.php"><span class="float-left"><i class="fas fa-pen-square"></i></span> Edit</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

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
        $query = $pdo->prepare('SELECT * FROM admins WHERE user_name = ? and password = ?');

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
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="apple-touch-icon" sizes="180x180" href="../images/logo-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="../images/logo-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="16x16" href="../images/logo-icon-512x512.png">
     <title>Admin Login</title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
       integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="styles.css">
   </head>

   <body>
     <header id="header">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
             <h1><span><img src="../images/admin-header.png" height="100px"></span> Admin<small> Login</small></h1>
           </div>
         </div>
       </div>
     </header>

     <section id="breadcrumb">
       <div class="container-fluid">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><h3><a class="btn btn-secondary" href="../index.php">&larr; To Site</a></h3></li>
         </ol>
       </div>
     </section>

     <div class="container" id="login">

      <?php if(isset($error)){ ?>
        <small style="color: red"> <?php echo $error; ?> </small>
        <br><br>
      <?php } ?>
      <div class="card">
        <div class="card-title">
          <h2>Welcome BGD_Admin</h2>
        </div>
        <div class="card-body">
          <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
          </form>
        </div>
      </div>
   </div>

   <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   </body>

 </html>
<?php
  }
?>
