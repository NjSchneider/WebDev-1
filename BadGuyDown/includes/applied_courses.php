<?php

class Applied_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM applied_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($applied_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM applied_courses WHERE applied_id = ?");
    $query->bindValue(1, $applied_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
