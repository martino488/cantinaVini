<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinili e Vinelli</title>
    <?php include_once 'header.php' ?>
</head>
<body>
<!-- $query = $pdo -> query("SELECT id, nome, anno, tipologia, email, descrizione, immagine FROM vini");
$vino = $query ->fetchAll(PDO::FETCH_ASSOC); -->
<?php  
    $vino_id = $_GET['id']?? null;

    if($vino_id){
        $query = $pdo -> prepare("SELECT * FROM vini WHERE id = :id");
        $query -> execute(['id' => $vino_id]);
        $vino = $query -> fetch(PDO::FETCH_ASSOC);
    }
    if(!$vino){
        die("vino non trovato");
    } 
?>
<h1><?php echo htmlspecialchars($vino['nome']) ?></h1>
<h3><?php echo htmlspecialchars($vino['prezzo']) ?></h3>
<p><?php echo htmlspecialchars($vino['descrizione']) ?></p>
<h3><?php echo htmlspecialchars($vino['anno']) ?></h3>
<div class="img">
    <img src="img/<?php echo $vino['immagine'] ?>" width="350">>
</div>


    
</body>
</html>