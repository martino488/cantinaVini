<?php
include_once 'config.php';
require_once 'class/database.php'; 

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
    $pars = [':nome' => $vino,':anno' => $anno,':tipologia' => $tipologia,':email' => $email,':descrizione' => $descrizione];
    queryExec($sql, $pars);
   
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

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = trim($_POST['username']?? '');
    $password = trim($_POST['password']?? '');
    try{
        
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utenti (username, password) VALUES (:username, :password)";
        $pars = [':username' => $username, ':password' => $password_hash];
        queryExec($sql, $pars);

    }catch (PDOException $e){
        die("errore nel'inserimento " . $e->getMessage());
    }
    header("Location:login.php?success=1");
    exit();
}

?>