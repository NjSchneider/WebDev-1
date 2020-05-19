<?php

class Guest_Instructor{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM guest_instructors");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($instructor_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM guest_instructors WHERE instructor_id = ?");
    $query->bindValue(1, $instructor_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
