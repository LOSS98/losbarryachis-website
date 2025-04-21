<?php
require_once 'modules/common.php';
require_once 'config.php';
$nom_page = 'Détails du Shotgun';
$nom_page_style = 'shotgun-details';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: shotguns.php');
    exit;
}

$shotgun_id = intval($_GET['id']);

function fetchShotgun($id) {
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
        $shotguns = json_decode($response, true);
        foreach ($shotguns['data'] as $shotgun) {
            if ($shotgun['id'] == $id) {
                return $shotgun;
            }
        }
    }

    return null;
}

function fetchParticipants($id) {
    global $API_URL, $API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$API_URL/api/shotguns/$id/participants");
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

$shotgun = fetchShotgun($shotgun_id);

if (!$shotgun) {
    header('Location: shotguns.php');
    exit;
}

$participants = fetchParticipants($shotgun_id);
?>
    <!DOCTYPE html>
    <html lang="fr">

<?php include 'modules/head.php'; ?>

    <body>
    <?php include 'modules/header.php'; ?>

    <section id="sect1">
        <div class="main-container">
            <div class="content">
                <a href="shotguns.php" class="btn btn-secondary back-btn"><ion-icon name="arrow-back"></ion-icon> Retour aux shotguns</a>

                <div class="shotgun-details">
                    <div class="shotgun-header">
                        <div class="shotgun-image">
                            <?php if (!empty($shotgun['image_path'])): ?>
                                <img src="<?= htmlspecialchars($shotgun['image_path']) ?>" alt="<?= htmlspecialchars($shotgun['title']) ?>">
                            <?php else: ?>
                                <img src="assets/img/default-shotgun.webp" alt="Image par défaut">
                            <?php endif; ?>
                        </div>
                        <div class="shotgun-info">
                            <h1><?= htmlspecialchars($shotgun['title']) ?></h1>
                            <p class="shotgun-description"><?= htmlspecialchars($shotgun['description']) ?></p>
                            <div class="shotgun-meta">
                                <span class="created-date"><ion-icon name="calendar"></ion-icon> Créé le <?= date('d/m/Y H:i', strtotime($shotgun['created_at'])) ?></span>
                                <span class="participants-count"><ion-icon name="people"></ion-icon> <?= $shotgun['participants_count'] ?> participants</span>
                            </div>
                        </div>
                    </div>

                    <div class="participants-section">
                        <h2>Liste des participants</h2>

                        <div class="search-container">
                            <input type="text" id="searchInput" placeholder="Rechercher un participant..." class="search-input">
                        </div>

                        <?php if (empty($participants['data'])): ?>
                            <div class="no-participants">
                                <p>Aucun participant pour le moment.</p>
                            </div>
                        <?php else: ?>
                            <div class="table-container">
                                <table class="participants-table">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Année d'étude</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($participants['data'] as $index => $participant): ?>
                                        <tr class="participant-row" data-username="<?= htmlspecialchars($participant['lname'].$participant['fname'].$participant['study_year']) ?>">
                                            <td><?= htmlspecialchars($participant['lname']) ?></td>
                                            <td><?= htmlspecialchars($participant['fname']) ?></td>
                                            <td><?= htmlspecialchars($participant['study_year']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'modules/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const participantRows = document.querySelectorAll('.participant-row');

            searchInput.addEventListener('input', function() {
                const searchValue = this.value.toLowerCase().trim();

                participantRows.forEach(row => {
                    const username = row.getAttribute('data-username').toLowerCase();

                    if (username.includes(searchValue)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>
    </body>
    </html><?php
