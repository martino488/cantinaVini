<?php
include_once 'config.php';

$errors = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $vino        = trim($_POST['nome'] ?? '');
    $anno        = trim($_POST['anno'] ?? '');
    $tipologia   = trim($_POST['tipologia'] ?? '');
    $email       = trim($_POST['email'] ?? '');
    $descrizione = trim($_POST['descrizione'] ?? '');

if(empty($vino)){
    $errors['nome'] = "devi compilare il campo vino";
}

if(empty($anno)){
    $errors['anno'] = "devi compilare il campo anno";
}elseif($anno < 1900 || $anno > 2026){
    $errors['anno'] = "Aggiungi un anno che sia compreso tra il 1900 e il 2026";
}

$valoriPermessi = ['rosso', 'bianco', 'bollicine'];

if(empty($tipologia)){
    $errors['tipologia'] = "devi compilare il campo tipologia";
}elseif(!in_array($tipologia, $valoriPermessi)){
    $errors['tipologia'] = "aggiungi rosso, bianco o bollicine";
}
if(empty($email)){
    $errors['email'] = "devi compilare il campo email";
}

if(empty($errors)){
    try{
    $sql = "INSERT INTO vini (nome, anno, tipologia, email, descrizione) VALUES (:nome, :anno, :tipologia, :email, :descrizione)";
    $stmt = $pdo -> prepare($sql);
   
    $stmt -> execute([
    ':nome' => $vino,
    ':anno' => $anno,
    ':tipologia' => $tipologia,
    ':email' => $email,
    ':descrizione' => $descrizione
    ]);
    
}catch(PDOException $e){
    die("errore nell'inserimento" . $e->getMessage());
}
header("Location:magazzino.php?success=1");
exit();
}
if(isset($_GET['success'])){
    echo "Vino salvato";
}else{
    foreach($errors as $errore){
        echo "<li 'style='color:red;'> $errore </li>" ;

        }
}}


?>