<?php 
require_once 'config.php'; 
require_once 'class/database.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/cantina.css">
     <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantina</title>
    <?php include 'templates/header.php' ?>
</head>

<body>

    <?php 
    $query = "SELECT * FROM vini "; 
    $viniCantina = queryExec($query);
    ?>



    <div class="container-grid">
        <?php foreach ($viniCantina as $vino) : ?>
            <div class="wine-card">
                <div class="wine-img">

                </div>

                <div class="wine-info">

                    <h3 class="wine-name"><strong><?php echo htmlspecialchars($vino['nome']); ?></strong></h3>

                    <p class="wine-age"><?php echo htmlspecialchars($vino['anno']) . "<br>"; ?>

                        <span class="badge">
                            <?php echo mb_strtoupper(htmlspecialchars($vino['tipologia'])); ?>
                        </span>
                    <details>
                        <summary>Descrizione</summary>
                        <div class="desc-wine"><?php echo htmlspecialchars($vino['descrizione']); ?></div>
                    </details>
                    <details>
                        <summary>Prezzo</summary>
                        <div class="prezzo"> <strong><?php echo htmlspecialchars($vino['prezzo']); ?></strong> </div>
                    </details>
                    <a href="mailto:<?php echo htmlspecialchars($vino['email']); ?>" class="contact-btn">
                        Contatta Fornitore
                    </a>
                </div>
            <?php endforeach ?>
            </div>
    </div>
    <?php include_once 'templates/footer.php' ?>
</body>

</html>