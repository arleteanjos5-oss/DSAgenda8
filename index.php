<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Lista de Amigos</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey w3-display-container" style="height:100vh;">

<div class="w3-card-4 w3-white w3-display-middle" style="width:350px; padding:20px;">
    <h2 class="w3-center w3-text-blue">Acesso Restrito</h2>
    <form action="loginAction.php" method="POST">
        <label class="w3-text-blue"><b>Usuário</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="txtNome" required>

        <label class="w3-text-blue"><b>Senha</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="password" name="txtSenha" required>

        <button class="w3-btn w3-blue w3-block">Entrar</button>
    </form>
</div>

</body>
</html>