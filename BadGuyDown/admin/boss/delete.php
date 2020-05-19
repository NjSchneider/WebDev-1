<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/boss_courses.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM boss_courses WHERE boss_id = '$id'");
      $query->execute();

      header('location: boss.php');
    }

?>
