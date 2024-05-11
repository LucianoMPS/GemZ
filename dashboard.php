<?php 
    session_start();
    if (!isset($_SESSION['user'])) header('location: login.php');
    
    $user = ($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GemZ - Dashboard</title>
    <link rel="stylesheet" href="css/Dashboardstyle.css">
    <link rel="stylesheet" href="css/Sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <?php include('estruturas/sidebar.php') ?>

        <div class="dashboard_content_conteiner" id="dashboard_content_conteiner">
            <?php include('estruturas/topnav.php') ?>
            
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>

        </div>
    </main>
</body>

<script src="scripts/sidebarhiden.js"></script>

</html>