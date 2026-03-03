<?php 
include_once 'config.php' ;
require_once 'class/database.php'; 
include_once 'preparedStmt.php'
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrati</title>
</head>
<body>


<form action="register.php" method="POST">
    <h2>REGISTRATI</h2>
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Inserisci username"><br>
    <label for="password">Password</label>
    <input type="password" name="password"><br>
    <button type="submit">Registrati</button>
</form>
    
</body>
</html>