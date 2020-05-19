<?php

class Boss_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM boss_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($boss_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM boss_courses WHERE boss_id = ?");
    $query->bindValue(1, $boss_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
