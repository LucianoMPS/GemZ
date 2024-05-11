<?php 
    session_start();
    if (!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'users';
    $user = ($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GemZ - Usuarios</title>
    <link rel="stylesheet" href="css/Sidebar.css">
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <?php include('estruturas/sidebar.php') ?>

        <div class="dashboard_content_conteiner" id="dashboard_content_conteiner">
            <?php include('estruturas/topnav.php') ?>

            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <div class="row">
                        <div class="column column-5">
                            <h1 class="section_header"><i class="fa fa-plus"></i> Adicionar usuario</h1>
                            <form action="database/add.php" method="POST">
                                <div class="buttonCaixa">
                                    <div class="label">
                                        <label for="first_name">Primeiro Nome</label>
                                        <input type="text" name="first_name" id="first_name" class="appFormInput">
                                    </div>
                                    <div class="label">
                                        <label for="last_name">Sobrenome</label>
                                        <input type="text" name="last_name" id="last_name" class="appFormInput">
                                    </div>
                                    <div class="label">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="appFormInput">
                                    </div>
                                    <div class="label">
                                        <label for="password">Senha</label>
                                        <input type="password" name="password" id="password" class="appFormInput">
                                    </div class="label">
                                    <div id="buttons">
                                        <button type="submit"><i class="fa fa-plus"></i> Adcionar</button>
                                        <button type="reset">Limpar</button>
                                    </div>
                                </div>
                            </form>
                            <?php if (isset($_SESSION['response'])) {
                                $response_massage = $_SESSION['response']['message'];
                                $is_sucess = $_SESSION['response']['sucess'];
                            ?>
                            <div class="responseMessage">
                                <p class="responseMessage <?= $is_sucess ? 'responseMessage__sucess' : 'responseMessage__error' ?>">
                                    <?= $response_massage  ?>
                                </p>
                            </div>
                            <?php unset($_SESSION['response']); }?>
                        </div>
                        
                        
                        <div class="column column-7">
                            <h1 class="section_header"><i class="fa fa-list"></i> Listar Usuarios</h1>
                            <div class="section_content">
                                <div class="users">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Primeiro Nome</th>
                                                <th>Sobrenome</th>
                                                <th>Email</th>
                                                <th>Criado em</th>
                                                <th>Atuailizado em</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>lorem200</td>
                                                <td>teste</td>
                                                <td>testeteste</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src=" scripts/sidebarhiden.js">
</script>

</html>