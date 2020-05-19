<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/shotgun_courses.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM shotgun_courses WHERE shotgun_id = '$id'");
      $query->execute();

      header('location: shotgun.php');
    }

?>
