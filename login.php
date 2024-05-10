<?php
// inicia a seção
session_start();
if (isset($_SESSION['user'])) header('location: dashboard.php');
$error_message = '';
require_once('database/conexao.php');

if ($_POST) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    // $query = 'SELECT * FROM users WHERE users.email="' .$user. '" AND users.password="' .$password. '"LIMIT 1';
    // $stmt = $conn->prepare($query);
    // $stmt->execute();

    // if ($stmt->rowCount() > 0) {
    //     $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $user = $stmt->fetchAll()[0];
    //     $_SESSION['user'] = $user;
    //     header('Location: dashboard.php');
    // }else{
    //     $error_message = 'Verifique se seu nome e/ou senha estão correto(s)';
    // }

    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $users = $stmt->fetchAll();
    
    $user_exist = false;
    foreach($users as $user){
        $upass = $user['password'];

        if(password_verify($password, $upass)){
            $user_exist = true;
            $_SESSION['user'] = $user;
            break;
        }
        
    }

    var_dump($upass);
    var_dump($cripto);

    if($user_exist) header('Location: dashboard.php');
    else $error_message = 'Verifique se seu nome e/ou senha estão correto(s)';
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
        <h1>GemZ</h1>
        <h2>Gestão de Estoque do Mercadinho do Seu Zé</h2>
    </header>
    <main class="loginBody">
        <form action="login.php" method="POST">

            <!-- imprime a mensagem de erro -->
            <?php
        if (!empty($error_message)) 
        { 
        ?>
            <div id="error">
                <Strong>Erro:</Strong>
                </p><?= $error_message ?></p>
            </div>
            <?php } 
        ?>

            <div class="inputCaixa">
                <label for="user">Usuário</label>
                <input type="text" name="username" placeholder="email">
                <br>
                <label for="pass">Senha</label>
                <input type="password" name="password" placeholder="senha">
            </div>
            <div class="buttonCaixa">
                <button type="submit">Realizar Login</button>
            </div>
        </form>
    </main>
</body>

</html>