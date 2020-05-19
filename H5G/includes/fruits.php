<?php

class Fruit{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM fruits");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($fruit_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM fruits WHERE id = ?");
    $query->bindValue(1, $fruit_id);
    $query->execute();

    return $query->fetch();
  }

}

 ?>
