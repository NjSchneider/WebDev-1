<?php

  session_start();

  include_once('../../includes/connection.php');
  include_once('../../includes/response_courses.php');

    if(isset($_GET['id'])){

      $id = $_GET['id'];

      $query = $pdo->prepare("DELETE FROM response_courses WHERE response_id = '$id'");
      $query->execute();

      header('location: response.php');
    }

?>
