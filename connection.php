<?php 
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'raissa';
  $port = '3306';
  $connection = new mysqli($server, $user, $password, $database, $port);

  // Insert the new record with UTF-8 character
  mysqli_set_charset($connection, "utf8");

  if ($connection->connect_error) {
    echo 'Falha na conexão: ' . $connection->connect_error;
  }
?>