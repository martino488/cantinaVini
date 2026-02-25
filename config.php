<?php 

$host     = "127.0.0.1";
$username = "root";
$password = "";
$db = "dbcantina";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$db", $username, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("problemi nella connessione " . $e->getMessage());
}

// try{
//     $sql = "CREATE DATABASE dbcantina";
//     $pdo -> exec($sql);
//     echo "connessione db ok";
// }catch(PDOException $e){
//     die("problemi nella creazione del db" . $e->getMessage());
// }

// try{
//     $sql = "CREATE TABLE vini(
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     nome VARCHAR(255),
//     anno INT(4),
//     tipologia ENUM('rosso', 'bianco', 'bollicine'),
//     email VARCHAR(255)
//     )";
//     $pdo -> exec($sql);
//     echo "creazione table ok";
// }catch(PDOException $e){
//     die("errore creazione table " . $e->getMessage());
// }


// try{
//     $sql = "INSERT INTO vini (nome, anno, tipologia, email) VALUES (:nome, :anno, :tipologia, :email)";
//     $stmt = $pdo -> prepare($sql);
//     foreach($vini as $vino){
//     $stmt -> execute([
//     ':nome' => $vino['nome'],
//     ':anno' => $vino['anno'],
//     ':tipologia' => $vino['tipologia'],
//     ':email' => $vino['email']
//     ]);
//         echo "inserimento di: " . $vino['nome'] . " è avvenuto con successo";
//     }
// }catch(PDOException $e){
//     die("errore nell'inserimento" . $e->getMessage());
// }




?>