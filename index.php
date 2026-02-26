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
    $query = $pdo->query("SELECT id,nome,anno,immagine FROM vini");
    $immaginiVini= $query->fetchAll(PDO::FETCH_ASSOC);
     ?>

    <div class="img-grid">
        <?php foreach($immaginiVini as $vino) : ?>
        <div class="img-card">
            <a href="vino.php?id=<?php echo ($vino['id']); ?>">
                <img src="img/<?php echo !empty($vino['immagine']) ? $vino['immagine'] : 'default.jpg'; ?>">
            </a>
            
            <div class="img-info">
                <p><?php echo mb_strtoupper(htmlspecialchars($vino['nome'])); ?></p>
                <span><?php echo htmlspecialchars($vino['anno']); ?></span>
            </div>
        </div>
    <?php endforeach ?>
        </div>


        <div class="desc-storia">
            <h1 class="titolo">La Nostra Filosofia</h1>
            <h3 class="sottotitolo">Non vendiamo solo bottiglie, ma momenti da ricordare</h3>
            <p class="testo">Crediamo fermamente che il vino non sia un semplice prodotto, ma un linguaggio universale. È condivisione davanti a un tramonto, è la cultura millenaria di mani sporche di terra, ed è — ammettiamolo — quel pizzico di sana follia che rende ogni serata imprevedibile. Un buon calice ha il potere di fermare il tempo, di trasformare una cena qualunque in un ricordo che resta.

                            Per questo motivo, la nostra selezione non segue le mode del momento o le logiche dei grandi numeri. Ogni singola etichetta della nostra collezione è stata scelta personalmente. Non ci siamo fidati delle schede tecniche o delle recensioni patinate: siamo andati nelle vigne, abbiamo parlato con i produttori e, soprattutto, abbiamo stappato.

                            Ogni vino che vedi su questo sito è stato assaggiato, testato e approvato dal nostro team. Abbiamo scartato decine di bottiglie che "non parlavano" per tenere solo quelle capaci di emozionare. Sì, lo sappiamo, marti... è un lavoro sporco e qualcuno doveva pur sacrificarsi per farlo. Quel qualcuno siamo noi, e lo abbiamo fatto con una dedizione che rasenta l'ossessione (e forse un leggero mal di testa il giorno dopo).

                            Dalle vigne eroiche strappate alla roccia, fino alle distese assolate del Sud, portiamo sulla tua tavola solo ciò che berremmo noi stessi. Perché la vita è troppo breve per bere un vino che non abbia un'anima.</h4>
        </div>
            <?php include_once 'footer.php' ?>
    </body>
</html>