<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/ccw_courses.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM ccw_courses WHERE ccw_id = '$id'");
      $query->execute();

      header('location: ccw.php');
    }

?>
