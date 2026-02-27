<?php include_once 'config.php' ?>
<?php include_once 'header.php' ?>
<?php $totaleGenerale = 0; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="carrello.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il tuo 🛒Carrello</title>
</head>
<body>
    
        <div class="container">
            <h1> Il tuo ordine </h1>
            <table>
                <thead>
                    <tr>
                        <th>Vino</th>
                        <th>Anno</th>
                        <th>Prezzo</th>
                        <th>Quantità</th>
                        <th>Azioni</th>
                        <th>Subtotale</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['carrello'] as $id => $quantita) :
                        $query = $pdo -> prepare("SELECT * FROM vini WHERE id = ? ");
                        $query -> execute([$id]);
                        $vino = $query -> fetch(PDO::FETCH_ASSOC);

                        if($vino):
                        $prezzoValido = (float)$vino['prezzo']; 
                        $quantitaValida = (int)$quantita;

                        $subtotale = $prezzoValido * $quantitaValida;
                        $totaleGenerale += $subtotale;      
                    ?>
                      <tr>
                        <td><?php echo htmlspecialchars($vino['nome']) ?></td>
                        <td><?php echo htmlspecialchars($vino['anno']) ?></td>
                        <td><?php echo number_format($prezzoValido, 2,',', '.') ?>€</td>
                        <td class="quantita"><?php echo $quantitaValida ?></td> 
                        <td><button class="remove" data-id="<?php echo $id ?>"> - Rimuovi</button></td>
                        <td><strong><?php echo number_format($subtotale, 2,',','.') ?> €</strong> </td>
                    </tr>
                    <?php endif ?>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="riga-totale">
                            <strong>Totale <?php echo number_format($totaleGenerale, 2,',', '.') ?>€</strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div> 
<script src="add.js"></script>

</body>
</html>