<?php
session_start();
require_once 'conexaoBD.php';

$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

$sql = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION['logado'] = $nome;
    header("Location: principal.php");
} else {
    header("Location: acessoNegado.php");
}

$conexao->close();
?>