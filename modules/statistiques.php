<?php
require_once 'config.php';
function fetchStatistics() {
    global $API_URL, $API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$API_URL/api/statistics");
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

$statistics = fetchStatistics();
?>

<div id="statistiques">
    <div class="main-container">
        <div class="stats-grid">
            <?php if (!empty($statistics['data'])): ?>
                <?php foreach ($statistics['data'] as $stat): ?>
                    <div class="statistique">
                        <div class="chiffre"><?= htmlspecialchars($stat['value']) ?></div>
                        <div class="description"><?= htmlspecialchars($stat['label']) ?></div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="no-statistics">
                    <p>Aucune statistique disponible pour le moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>