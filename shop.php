<?php include_once 'config.php'?>
<?php include_once 'gestione_carrello.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="shop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinili e Vinelli</title>
    <?php include_once 'header.php' ?>
</head>
<body>

    <?php $query       = $pdo->query("SELECT id,nome, anno, tipologia, descrizione, immagine, prezzo FROM vini "); ?>
    <?php $viniCantina = $query->fetchAll(PDO::FETCH_ASSOC); ?>



    <div class="img-grid">
        <?php foreach($viniCantina as $vino) : ?>
        <div class="img-card">
            <a href="vino.php?id=<?php echo ($vino['id']); ?>">
                <img src="img/<?php echo !empty($vino['immagine']) ? $vino['immagine'] : 'default.jpg'; ?>">
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

        <script src="add.js"></script>
   

    
</body>
</html>