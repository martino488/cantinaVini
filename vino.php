<?php
require_once 'config.php';
require_once 'class/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/vino.css">
    <title>Vinili e Vinelli</title>
    <?php include_once 'templates/header.php' ?>
</head>

<body>
    <!-- $query = $pdo -> query("SELECT id, nome, anno, tipologia, email, descrizione, immagine FROM vini");
$vino = $query ->fetchAll(PDO::FETCH_ASSOC); -->
    <?php
    $vino_id = $_GET['id'] ?? null;
    $vino = null;

    if ($vino_id) {
        $query = "SELECT * FROM vini WHERE id = ?";
        $risultato = queryExec($query, [$vino_id]);
        if (!empty($risultato)) {
            $vino = $risultato[0];
        }
    }
    if (!$vino) {
        die("vino non trovato");
    }
    ?>
   <div class="scheda-vino-layout">
    <div class="visual-lato">
        <div class="img-box">
            <img src="<?php echo $vino['immagine'] ? BASE_URL . "/assets/img/" . $vino['immagine'] : BASE_URL . "/assets/img/default.jpg"; ?>" width="350">
        </div>
        
    </div>

    <div class="info-vino">
        <h1><?php echo htmlspecialchars($vino['nome']) ?></h1>
        
        <div class="dati-tecnici">
            <p><strong>Prezzo:</strong> <?php echo htmlspecialchars($vino['prezzo']) ?></p>
            <p><strong>Anno:</strong> <?php echo htmlspecialchars($vino['anno']) ?></p>
        </div>

        <div class="descrizione-sezione">
            <h3>Descrizione</h3>
            <p><?php echo htmlspecialchars($vino['descrizione']) ?></p>
        </div>
    </div>
</div>
<div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <script>
        const lat = <?php echo $vino['lat']; ?>;
        const lon = <?php echo $vino['lon']; ?>;

        const coordVino = [lat, lon];
        console.log("test coord ", coordVino);
    </script>

    <script src="<?php echo BASE_URL ?>/assets/js/mappa/mappa.js"></script>



</body>

</html>