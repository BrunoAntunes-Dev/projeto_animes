<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "users";

$conexao =mysqli_connect($server, $user, $password, $database) or die ('Não foi possível conectar');
?>