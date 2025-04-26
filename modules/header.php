<header>
    <nav class="main-container">
        <div class="burger-menu">
            <div class="batons"><span></span><span></span><span></span></div>
        </div>
        <a href="index.php" class="logo-img"><img src="assets/img/logo-main.png" alt="Logo de la liste"><span>Los Barryachis</span></a>
        <ul>
            <li><a href="index.php" <?php if($nom_page == "Accueil"){ echo 'class="onPage"'; }?>>Accueil</a></li>
            <li><a href="shotguns.php" <?php if($nom_page == "Shotguns"){ echo 'class="onPage"'; }?>>Shotguns</a></li>
            <li><a href="programme.php" <?php if($nom_page == "Programme"){ echo 'class="onPage"'; }?>>Programme</a></li>
            <li><a href="teams.php" <?php if($nom_page == "Teams"){ echo 'class="onPage"'; }?>>Teams</a></li>
            <li><a href="charte.php" <?php if($nom_page == "Teams"){ echo 'class="onPage"'; }?>>Sécurité</a></li>
            <li><a href="promesses.php" <?php if($nom_page == "Promesses"){ echo 'class="onPage"'; }?>>Promesses</a></li>
        </ul>
    </nav>
</header>