<?php
  include_once('../../includes/connection.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $tag = $_POST['tag'];
    $content = nl2br($_POST['content']);
    $timestamp = time();

    $query = $pdo->prepare("UPDATE fruits SET fruit_title = ?, fruit_image = ?, fruit_tag = ?, fruit_content = ?, update_timestamp = ?  WHERE fruit_id = '$id'");

    $query->bindValue(1, $title);
    $query->bindValue(2, $image);
    $query->bindValue(3, $tag);
    $query->bindValue(4, $content);
    $query->bindValue(5, $timestamp);

    $query->execute();

    header('location: fruits.php');
?>
