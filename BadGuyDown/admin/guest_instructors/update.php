<?php
  include_once('../../includes/connection.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $info = nl2br($_POST['info']);
    $timestamp = time();

    $query = $pdo->prepare("UPDATE guest_instructors SET instructor_name = ?, instructor_image = ?, instructor_info = ?, update_timestamp = ?  WHERE instructor_id = '$id'");

    $query->bindValue(1, $name);
    $query->bindValue(2, $image);
    $query->bindValue(3, $info);
    $query->bindValue(4, $timestamp);

    $query->execute();

    header('location: ../index.php');
?>
