<?php

class Response_Course{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM response_courses");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($response_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM response_courses WHERE response_id = ?");
    $query->bindValue(1, $response_id);
    $query->execute();

    return $query->fetch();
  }

}

?>
