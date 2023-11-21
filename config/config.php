<?php

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$pass = "";
$db = "projeto";

try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    echo"Conexão realizada com sucesso";
} catch (PDOException $e) {
    echo "Erro de conexão com banco ". $e->getMessage();
}