<?php
  include_once('../../includes/connection.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $tag = $_POST['tag'];
    $content = nl2br($_POST['content']);
    $timestamp = time();

    $query = $pdo->prepare("UPDATE poultry SET poultry_title = ?, poultry_image = ?, poultry_tag = ?, poultry_content = ?, update_timestamp = ?  WHERE poultry_id = '$id'");

    $query->bindValue(1, $title);
    $query->bindValue(2, $image);
    $query->bindValue(3, $tag);
    $query->bindValue(4, $content);
    $query->bindValue(5, $timestamp);

    $query->execute();

    header('location: poultry.php');
?>
