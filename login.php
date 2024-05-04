<?php
$error_message = '';
require_once('database/conexao.php');

if ($_POST) {
    $user = $_POST['user'];
    $password = $_POST['pass'];

    $query = 'SELECT * FROM usuarios WHERE usuarios.email="' .$user. '" AND usuarios.senha="' .$password. '"';
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    die;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GemZ - Login</title>

    <link rel="shortcut icon" href="assets/ico/icon.ico" type="image/x-icon" sizes="20x20">
    <link rel="stylesheet" href="css/Loginstyle.css">
</head>

<body>
    <header class="loginHeader">
        <?php
        if (!empty($error_message)) { ?>
        <div id="errorMessage">
            <p>Erro:<?= $error_message ?></p>
        </div>
        <?php } ?>
        <h1>GemZ</h1>
        <h2>Gestão de Estoque do Mercadinho do Seu Zé</h2>
    </header>
    <main class="loginBody">
        <form action="login.php" method="POST">
            <div class="inputCaixa">
                <label for="user">Usuário</label>
                <input type="text" name="user" placeholder="email">
                <br>
                <label for="pass">Senha</label>
                <input type="password" name="pass" placeholder="senha">
            </div>
            <div class="buttonCaixa">
                <button type="submit">Realizar Login</button>
            </div>
        </form>

    </main>
</body>

</html>