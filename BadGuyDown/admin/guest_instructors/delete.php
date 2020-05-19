<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/guest_instructors.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM guest_instructors WHERE instructor_id = '$id'");
      $query->execute();

      header('location: ../index.php');
    }

?>
