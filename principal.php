<?php
require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - Lista de Amigos</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Barra de Topo -->
<div class="w3-bar w3-blue w3-padding">
    <span class="w3-bar-item w3-large">Bem-vinda, <b><?php echo $_SESSION['logado']; ?></b>!</span>
    <a href="logoutAction.php" class="w3-bar-item w3-button w3-red w3-right w3-round">Sair</a>
</div>

<!-- Conteúdo Principal -->
<div class="w3-container w3-margin-top" style="max-width: 900px; margin: auto;">
    
    <div class="w3-row w3-margin-bottom">
        <div class="w3-half">
            <h2>Minha Lista de Amigos</h2>
        </div>
        <div class="w3-half w3-text-right">
            <!-- Botão para abrir a tela de Adicionar Amigo -->
            <a href="cadastro.php" class="w3-button w3-green w3-round w3-margin-top">
                <i class="fa fa-user-plus"></i> Adicionar Novo Amigo
            </a>
        </div>
    </div>

    <!-- Tabela de Listagem -->
    <table class="w3-table-all w3-hoverable w3-card-4">
        <thead>
            <tr class="w3-blue">
                <th>ID</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>E-mail</th>
                <th class="w3-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta os amigos salvos no banco de dados
            $sql = "SELECT * FROM amigo";
            $resultado = $conexao->query($sql);

            if ($resultado && $resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha['idamigo'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['apelido'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td class='w3-center'>
                            <a href='excluir.php?id=" . $linha['idamigo'] . "' class='w3-button w3-red w3-tiny w3-round'><i class='fa fa-trash'></i> Excluir</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='w3-center'>Nenhum amigo cadastrado ainda!</td></tr>";
            }
            ?>
        </tbody>
    </table>

</div>

</body>
</html>