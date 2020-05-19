<?php

class CCW_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM ccw_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($ccw_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM ccw_courses WHERE ccw_id = ?");
    $query->bindValue(1, $ccw_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
