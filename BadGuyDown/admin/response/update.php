<?php
  include_once('../../includes/connection.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $tag = $_POST['tag'];
    $prerequisites = nl2br($_POST['prerequisites']);
    $info = nl2br($_POST['info']);
    $learn = nl2br($_POST['learn']);
    $equipment = nl2br($_POST['equipment']);
    $timestamp = time();

    $query = $pdo->prepare("UPDATE reponse_courses SET reponse_title = ?, reponse_tag = ?, reponse_prerequisites = ?, reponse_info = ?, reponse_learn = ?, reponse_equipment = ?, update_timestamp = ?  WHERE reponse_id = '$id'");

    $query->bindValue(1, $title);
    $query->bindValue(2, $tag);
    $query->bindValue(3, $prerequisites);
    $query->bindValue(4, $info);
    $query->bindValue(5, $learn);
    $query->bindValue(6, $equipment);
    $query->bindValue(7, $timestamp);

    $query->execute();

    header('location: response.php');
?>
