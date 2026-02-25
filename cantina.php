<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cantina.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinili e Vinelli</title>
    <?php include 'header.php' ?>
</head>

<body>

    <?php $query       = $pdo->query("SELECT nome, anno, tipologia, email, descrizione, immagine FROM vini "); ?>
    <?php $viniCantina = $query->fetchAll(PDO::FETCH_ASSOC); ?>

  

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
                <a href="mailto:<?php echo htmlspecialchars($vino['email']); ?>" class="contact-btn">
                    Contatta Fornitore
                </a>
            </div>
            <?php endforeach ?>
    </div>
</div>

</body>

</html>