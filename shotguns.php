<?php
require_once 'modules/common.php';
require_once 'config.php';
$nom_page = 'Shotguns';
$nom_page_style = 'shotguns';

function fetchShotguns() {
    global $API_URL, $API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$API_URL/api/shotguns/published");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-API-KEY: $API_KEY"
    ]);
    curl_setopt($ch, CURLOPT_CAINFO, CACERT_PATH);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        return json_decode($response, true);
    }

    return ['data' => []];
}

$shotguns = fetchShotguns();
?>
<!DOCTYPE html>
<html lang="fr">

<?php include 'modules/head.php'; ?>

<body>
<?php include 'modules/header.php'; ?>

<section id="sect1">
    <div class="main-container">
        <div class="content">
            <h1>Shotguns disponibles</h1>
            <p><strong>Résultats des shotguns !</strong></p>

            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Rechercher un shotgun..." class="search-input">
            </div>

            <div class="shotguns-grid">
                <?php if (empty($shotguns['data'])): ?>
                    <div class="no-shotguns">
                        <p>Aucun shotgun disponible pour le moment.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($shotguns['data'] as $shotgun): ?>
                        <div class="shotgun-card" data-title="<?= htmlspecialchars($shotgun['title']) ?>">
                            <div class="shotgun-image">
                                <?php if (!empty($shotgun['image_path'])): ?>
                                    <img src="<?= htmlspecialchars($shotgun['image_path']) ?>" alt="<?= htmlspecialchars($shotgun['title']) ?>">
                                <?php else: ?>
                                    <img src="assets/img/default-shotgun.webp" alt="Image par défaut">
                                <?php endif; ?>
                            </div>
                            <div class="shotgun-content">
                                <h2><?= htmlspecialchars($shotgun['title']) ?></h2>
                                <p><?= htmlspecialchars($shotgun['description']) ?></p>
                                <div class="shotgun-info">
                                    <span class="participants-count"><ion-icon name="people"></ion-icon> <?= htmlspecialchars($shotgun['participants_count']) ?> participants</span>
                                    <span class="shotgun-date"><ion-icon name="calendar"></ion-icon> <?= date('d/m/Y', strtotime($shotgun['created_at'])) ?></span>
                                </div>
                                <a href="shotgun-details.php?id=<?= $shotgun['id'] ?>" class="btn btn-primary">Voir les détails</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'modules/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const shotgunCards = document.querySelectorAll('.shotgun-card');

        searchInput.addEventListener('input', function() {
            const searchValue = this.value.toLowerCase().trim();

            shotgunCards.forEach(card => {
                const title = card.getAttribute('data-title').toLowerCase();

                if (title.includes(searchValue)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
</body>
</html>