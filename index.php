<?php include_once 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinili e Vinelli</title>
    <?php include_once 'header.php' ?>
</head>
<body>
    <?php 
    $query = $pdo->query("SELECT nome,anno,immagine FROM vini");
    $immaginiVini= $query->fetchAll(PDO::FETCH_ASSOC);
     ?>

    <div class="img-grid">
        <?php foreach($immaginiVini as $vino) : ?>
        <div class="img-card">
            <a href="cantina.php?nome=<?php echo urldecode($vino['nome']); ?>">
                <img src="img/<?php echo !empty($vino['immagine']) ? $vino['immagine'] : 'default.jpg'; ?>">
            </a>
            
            <div class="img-info">
                <p><?php echo mb_strtoupper(htmlspecialchars($vino['nome'])); ?></p>
                <span><?php echo htmlspecialchars($vino['anno']); ?></span>
            </div>
        </div>
    <?php endforeach ?>
        </div>
</body>
</html>