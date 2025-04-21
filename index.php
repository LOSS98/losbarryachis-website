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
                <a href="shotguns.php" class="btn btn-primary">Shotguns <ion-icon name="rocket"></ion-icon></a>
                <a href="teams.php" class="btn btn-terciary">Nos teams <ion-icon name="people"></ion-icon></a>
            </div>

        </div>
    </div>
</section>

<div id="banniere_verte">
    <div class="carousel">
        <?php
        $profile_data = [
            'Achille.jpg' => 'Achille',
            'Amandine.jpg' => 'Amandine',
            'Anna.jpg' => 'Anna',
            'Benjamin.jpg' => 'Benjamin',
            'Brieuc.jpg' => 'Brieuc',
            'Célia.jpg' => 'Célia',
            'Enzo.jpg' => 'Enzo',
            'Gwladys.jpg' => 'Gwladys',
            'Hugo.jpg' => 'Hugo',
            'Isma.jpg' => 'Isma',
            'Jeanne.jpg' => 'Jeanne',
            'Julian.jpg' => 'Julian',
            'Justin.jpg' => 'Justin',
            'Khalil.jpg' => 'Khalil',
            'Lilian_AVM.jpg' => 'Lilian A.',
            'Lilian_ME.jpg' => 'Lilian M.',
            'Lilou.jpg' => 'Lilou',
            'Lison.jpg' => 'Lison',
            'Loan.jpg' => 'Loan',
            'Lorick.jpg' => 'Lorick',
            'Louise.jpg' => 'Louise',
            'Lucas.jpg' => 'Lucas',
            'Ludo.jpg' => 'Ludo',
            'Luka.jpg' => 'Luka',
            'Léo.jpg' => 'Léo',
            'Macéo.jpg' => 'Macéo',
            'Marie.jpg' => 'Marie',
            'Mathilde.jpg' => 'Mathilde',
            'Mathis.jpg' => 'Mathis',
            'Max.jpg' => 'Max',
            'Mia.jpg' => 'Mia',
            'Mikael.jpg' => 'Mikael',
            'Nils.jpg' => 'Nils',
            'Noémie.jpg' => 'Noémie',
            'Paul.jpg' => 'Paul',
            'Pierre.jpg' => 'Pierre',
            'Pierrette.jpg' => 'Pierrette',
            'Robin.jpg' => 'Robin',
            'Thibaut.jpg' => 'Thibaut',
            'Tim.jpg' => 'Tim',
            'TOM_G.jpg' => 'Tom G.',
            'tom_p.jpg' => 'Tom P.',
            'Ugo_2.jpg' => 'Ugo',
            'Valentine_2.jpg' => 'Valentine',
            'Zach.jpg' => 'Zach',
            'Églantine.jpg' => 'Églantine'
        ];

        foreach ($profile_data as $image => $nickname) {
            echo '<div class="carousel-item">';
            echo '<img src="assets/img/pp/' . htmlspecialchars($image) . '" alt="Photo de ' . htmlspecialchars($nickname) . '">';
            echo '<span class="nickname">' . htmlspecialchars($nickname) . '</span>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<section id="sect2">
    <div class="main-container">
        <div class="content">
            <h1>Nous voir et nous revoir</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/09SE4u4JpGk?si=q5sqklbIQShrNyM1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php include 'modules/statistiques.php' ?>

<section id="sect3">
    <div class="main-container">
        <div class="content">
            <h1>Nos partenaires</h1>
            <div class="partenaires">
                <a href="https://www.lyf.eu/fr/" target="_blank"class="partenaire">
                    <img src="assets/img/partenaires/Lyf.corail.png" alt="Logo de Lyf.">
                </a>
                <a href="https://www.uphf.fr/vie-campus/bien-vivre/centre-sante"target="_blank"class="partenaire">
                    <img src="assets/img/partenaires/mse.png" alt="Logo de MSE">
                </a>
                <a href="https://brasserielepresident.fr/"target="_blank"class="partenaire">
                    <img src="assets/img/partenaires/lepresident.png" alt="Logo de Le Président">
                </a>
            </div>
            <div class="partenaires">
                <a href="https://www.intersport.fr/" target="_blank"class="partenaire">
                    <img src="assets/img/partenaires/intersport.png" alt="Logo d'intersport">
                </a>
                <a href="https://www.facebook.com/p/FripChic-100087309256616" target="_blank"class="partenaire">
                    <img src="assets/img/partenaires/fripchic.png" alt="Logo de frip'chic">
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'modules/footer.php'; ?>
</body>
</html>