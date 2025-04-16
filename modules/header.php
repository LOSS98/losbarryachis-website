<header>
    <nav class="main-container">
        <div class="burger-menu">
            <span></span><span></span><span></span>
        </div>
        <a href="index.php" class="logo-img"><img src="assets/img/logo-main.png" alt="Logo de la liste"><span>Los Barryachis</span></a>
        <ul>
            <li><a href="index.php" <?php if($nom_page == "Accueil"){ echo 'class="onPage"'; }?>>Accueil</a></li>
            <li><a href="programme.php" <?php if($nom_page == "Programme"){ echo 'class="onPage"'; }?>>Programme</a></li>
            <li><a href="teams.php" <?php if($nom_page == "Teams"){ echo 'class="onPage"'; }?>>Teams</a></li>
            <li><a href="promesses.php" <?php if($nom_page == "Promesses"){ echo 'class="onPage"'; }?>>Promesses</a></li>
        </ul>
        <div class="btn btn-primary" id="btn-taxi">
            <a href="#" download>Réserver un taxi <ion-icon name="car"></ion-icon></a>
        </div>
    </nav>
</header>