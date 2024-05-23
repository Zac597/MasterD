<?php

$hostname = 'localhost';
$username = 'root';
$password = 'isaac597';  // Atualize para a senha correta
$dbname = 'login';

$mysqli = new mysqli($hostname, $username, $password, $dbname);

if($mysqli->error){
  die("Falha ao conectar a database: " . $mysqli->error);
}