<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/pistol_courses.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM pistol_courses WHERE pistol_id = '$id'");
      $query->execute();

      header('location: pistol.php');
    }

?>
