<?php 

function connect() {
  // Create database connection
  return new PDO('mysql:host=localhost;dbname=budo_1;charset=utf8', 'budo', 'supergeheim');
}

?>
