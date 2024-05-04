<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GemZ</title>
    <link rel="stylesheet" href="css/Dashboardstyle copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <div class="dashboard_sidebar_logo">
                <img src="assets/icon.jpeg" alt="">
                <h1>GemZ</h1>
            </div>
            <div class="dashboard_sidebar_user">
                <img src="assets/user.png" alt="">
                <p>Seu Zé</p>
            </div>
            <hr>
            <div class="dashboard_sidebar_menu">
                <ul class="dashboard_sidebar_menulist">
                    <li class="menuActive">
                        <a href=""><i class="fa fa-dashboard menuIcons"></i> DashBoard</a>
                    </li>
                    <li class="menuActive">
                        <a href=""><i class="fa fa-dashboard menuIcons"></i> DashBoard</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="dashboard_content_conteiner" id="dashboard_content_conteiner">
            <div class="dashboard_topNav">
                <i class="fa fa-navicon" id="toggleBtn"></i>
                <i class="fa fa-power-off" id="logoutBtn"> Sair</i>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>

        </div>
    </main>
</body>

<script>
var sideBarIsOpen = true;


toggleBtn.addEventListener('click', (event) => {

    if (sideBarIsOpen) {
        dashboard_sidebar.style.display = 'none';
        dashboard_content_conteiner.style.flexBasis = '100%';
        sideBarIsOpen = false;
    } else {
        dashboard_sidebar.style.display = 'inline-block';
        dashboard_content_conteiner.style.flexBasis = '85%';
        sideBarIsOpen = true;
    }



})
</script>

</html>