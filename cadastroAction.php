<?php
require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

// Captura os dados enviados pelo formulário
$nome = $_POST['txtNome'];
$apelido = $_POST['txtApelido'];
$email = $_POST['txtEmail'];

// Prepara o comando SQL de inserção (Create)
$sql = "INSERT INTO amigo (nome, apelido, email) VALUES ('$nome', '$apelido', '$email')";

if ($conexao->query($sql) === TRUE) {
    // Redireciona imediatamente para a tela principal com a lista atualizada
    header("Location: principal.php");
    exit();
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>