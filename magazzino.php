<?php include_once 'config.php' ?>
<?php include_once 'preparedStmt.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="magazzino.css">
    <title>Vinili e Vinelli</title>
    <?php include_once 'header.php' ?>
</head>
<body>
    <div class="form-container">
        <form action="magazzino.php" method="POST">
            <label> Aggiungi un nuovo Vino al magazzino </label>
            <input type="text" name="nome" placeholder="Aggiuingi nome Vino"><br>
            <label>Aggiungi Anno</label>
            <input type="number" name="anno" placeholder="Aggiungi Anno" min="1900" max="2026" required><br>
            <label>Seleziona la tipologia</label>
            <select name="tipologia" id="tipologia">
                <option value="" disabled selected>Scegli...</option>
                <option value="rosso">Rosso</option>
                <option value="bianco">Bianco</option>
                <option value="bollicine">Bollicine</option>
            </select>
             <label class="email">Email</label>
        <input type="email" name="email" placeholder="Inserisci email">
        <label>Inserisci descrizione</label>
        <textarea class="descrizione" name="descrizione" id="descrizione" placeholder="Insersci la descrizione"></textarea>
        <label>Inserisci Foto</label>
        <input type="file" accept=".jpg, .jpeg">
        <span><small>Solo file jpeg/jpg</small></span>
        <button type="submit" class="save">Inserisci nel magazzino</button>
        </form>
    </div>
    <?php include_once 'footer.php' ?>
</body>
</html>