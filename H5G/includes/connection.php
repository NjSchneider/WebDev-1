<?php

try{
  $pdo = new PDO('mysql:host=107.180.46.229;dbname=harvest505', 'test', 'testing');
} catch(PDOException $e){
  echo $e->$php_errormsg;
  exit('Database error.');
}

?>
