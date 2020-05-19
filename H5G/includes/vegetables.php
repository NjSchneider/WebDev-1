<?php

class Vegetable{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM vegetables");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($vegetable_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM vegetables WHERE vegetable_id = ?");
    $query->bindValue(1, $vegetable_id);
    $query->execute();

    return $query->fetch();
  }

}

 ?>
