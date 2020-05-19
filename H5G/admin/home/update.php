<?php
  include_once('../../includes/connection.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $content = nl2br($_POST['content']);
    $link = $_POST['link'];
    $timestamp = time();

    $query = $pdo->prepare("UPDATE products SET product_title = ?, product_image = ?, product_content = ?, product_link = ?, update_timestamp = ?  WHERE product_id = '$id'");

    $query->bindValue(1, $title);
    $query->bindValue(2, $image);
    $query->bindValue(3, $content);
    $query->bindValue(4, $link);
    $query->bindValue(5, $timestamp);

    $query->execute();

    header('location: home.php');
?>
