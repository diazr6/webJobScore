<?php

//$db = new PDO('mysql:host=localhost;dbname=demo;charset=utf8mb4', 'root', '1234');

try {
  $db = new PDO('mysql:host=localhost;dbname=JobScore;charset=utf8mb4', 'root', '1234');
  echo 'Conectado a '.$db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
} catch(PDOException $ex) {
  echo 'Error conectando a la BBDD. '.$ex->getMessage(); 
}

?>