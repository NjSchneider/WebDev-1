<?php

class Rifle_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM rifle_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($rifle_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM rifle_courses WHERE rifle_id = ?");
    $query->bindValue(1, $rifle_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
