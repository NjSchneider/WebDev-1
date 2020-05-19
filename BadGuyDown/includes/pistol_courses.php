<?php

class Pistol_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM pistol_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($pistol_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM pistol_courses WHERE pistol_id = ?");
    $query->bindValue(1, $pistol_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
