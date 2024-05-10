<div class="dashboard_sidebar" id="dashboard_sidebar">
    <div class="dashboard_sidebar_logo">
        <img src="assets/icon.jpeg" alt="">
        <h1>GemZ</h1>
    </div>
    <div class="dashboard_sidebar_user">
        <img src="assets/user.png" alt="foto do usuario">
        <p><span><?= $user ['first_name']?></span> </p>
    </div>
    <hr>
    <div class="dashboard_sidebar_menu">
        <ul class="dashboard_sidebar_menulist">
            <li class="menuActive">
                <a href="dashboard.php"><i class="fa fa-dashboard menuIcons"></i> DashBoard</a>
            </li>
            <li class="menuActive">
                <a href=""><i class="fa fa-barcode menuIcons"></i> Produtos</a>
            </li>
            <li class="menuActive">
                <a href=""><i class="fa fa-database  menuIcons"></i> Estoque</a>
            </li>
            <li class="menuActive">
                <a href=""><i class="fa fa-list menuIcons"></i> Pedidos</a>
            </li>
            <li class="menuActive">
                <a href=""><i class="fa fa-file menuIcons"></i> Relatórios</a>
            </li>
            <li class="menuActive">
                <a href="user-add.php"><i class="fa fa-users menuIcons"></i> Usuarios</a>
            </li>
            <li class="menuActive">
                <a href=""><i class="fa fa-cogs menuIcons"></i> Configurações</a>
            </li>
        </ul>
    </div>
</div>