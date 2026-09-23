<?php
$servername = "localhost";
$username = "root";
$password = ""; // Deixe vazio para o XAMPP!
$dbname = "pwii";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>