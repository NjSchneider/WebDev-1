<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/rifle_courses.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM rifle_courses WHERE rifle_id = '$id'");
      $query->execute();

      header('location: rifle.php');
    }

?>
