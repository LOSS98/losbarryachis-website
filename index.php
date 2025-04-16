<?php
    require_once 'modules/common.php';
    $nom_page = 'Accueil';
    $nom_page_style = 'index';
?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'modules/head.php'; ?>

<body>
    <?php include 'modules/header.php'; ?>

    <section id="sect1">
        <div class="main-container">
            <div class="content">
                <h1>Bienvenue <br>au <span class="color-secondary">Me</span><span class="color-terciary">xiq</span><span class="color-primary">ue !</span></h1>
                <p><strong>Nous vous souhaitons à toutes et tous une très bonne semaine de campagne.</strong></p>
                <div class="btns">
                    <a href="programme.php" class="btn btn-secondary">Voir le programme <ion-icon name="calendar"></ion-icon></a>
                    <a href="teams.php" class="btn btn-terciary">Nos teams <ion-icon name="people"></ion-icon></a>
                </div>
                
            </div>
        </div>
    </section>

    <div id="banniere_verte">
        <div class="main-container">
            <div class="info">
                <div class="icon">1895</div>
                <div class="description">Crêpes commandées</div>
            </div>
            <div class="info">
                <div class="icon">57</div>
                <div class="description">Trajets en taxi</div>
            </div>
            <div class="info">
                <div class="icon">368</div>
                <div class="description">Appels au standard</div>
            </div>
            <div class="info">
                <div class="icon">10</div>
                <div class="description">Nombre d'accidents</div>
            </div>
            <div class="info">
                <div class="icon">Kevin</div>
                <div class="description">Le plus d'appel au standard </div>
            </div>
        </div>
    </div>

    <section id="sect2">
        <div class="main-container">
            <div class="content">
                <h1>Notre film</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/09SE4u4JpGk?si=q5sqklbIQShrNyM1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php include 'modules/statistiques.php' ?>

    <section id="sect2">
        <div class="main-container">
            <div class="content">
                <h1>Nos partenaires</h1>
                <div>
                    <div class="partenaire">
                        <img src="assets/img/partenaires/Lyf.corail.png" alt="Logo de Lyf.">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'modules/footer.php'; ?>
</body>
</html>