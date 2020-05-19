<?php

class Product{
  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM products");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($product_id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE product_id = ?");
    $query->bindValue(1, $product_id);
    $query->execute();

    return $query->fetch();
  }

}

 ?>
