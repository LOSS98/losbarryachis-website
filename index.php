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
                <a href="programme.html" class="btn btn-primary">Voir le programme <ion-icon name="arrow-forward-outline"></ion-icon></a>
            </div>
        </div>
    </section>

    <section id="sect2">
        <div class="main-container">
            <div class="content">
                <h1>Notre film</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/09SE4u4JpGk?si=q5sqklbIQShrNyM1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="sect2">
        <div class="main-container">
            <div class="content">
                <h1>Nos partenaires</h1>
                <div>

                </div>
            </div>
        </div>
    </section>

    <?php include 'modules/footer.php'; ?>
</body>
</html>