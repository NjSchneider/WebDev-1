<?php

class Poultry{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM poultry");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($poultry_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM fruitss WHERE poultry_id = ?");
    $query->bindValue(1, $poultry_id);
    $query->execute();

    return $query->fetch();
  }

}

 ?>
