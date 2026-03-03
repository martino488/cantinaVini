<?php 
require_once 'config.php'; 
require_once 'class/database.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/shop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinili e Vinelli</title>
    <?php include_once 'templates/header.php' ?>
</head>
<body>

    <?php $query = "SELECT id,nome, anno, tipologia, descrizione, immagine, prezzo FROM vini "; ?>
    <?php $viniCantina = queryExec($query) ?>



    <div class="img-grid">
        <?php foreach($viniCantina as $vino) : ?>
        <div class="img-card">
            <a href="vino.php?id=<?php echo ($vino['id']); ?>">
                <img src="<?php echo $vino['immagine'] ? BASE_URL."/assets/img/".$vino['immagine'] : BASE_URL."/assets/img/default.jpg"; ?>">
            </a>
            
            <div class="img-info">
                <p><?php echo mb_strtoupper(htmlspecialchars($vino['nome'])); ?></p>
                <span><?php echo htmlspecialchars($vino['anno']); ?></span>
            </div>
             <summary>
                Prezzo   <div class="prezzo"> <strong><?php echo htmlspecialchars($vino['prezzo']); ?></strong> </div>
             </summary>          
            <button class="add" data-id="<?php echo $vino['id'] ?>">Aggiungi</button>
        </div>
    <?php endforeach ?>
        </div>

        <script src="<?php echo BASE_URL ?>/assets/js/add.js"></script>
   

    
</body>
</html>