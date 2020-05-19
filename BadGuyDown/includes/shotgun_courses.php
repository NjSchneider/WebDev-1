<?php

class Shotgun_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM shotgun_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($shotgun_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM shotgun_courses WHERE shotgun_id = ?");
    $query->bindValue(1, $shotgun_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
