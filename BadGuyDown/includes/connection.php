<?php

try{
  $pdo = new PDO('mysql:host=localhost;dbname=bgd', 'root');
} catch(PDOException $e){
  exit('Database error.');
}

?>
