<?php 
include_once 'config.php' ;
require_once 'class/database.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Accedi</h2>
        <label for="username"> User </label>
        <input type="text" name="username" placeholder="inserisci username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Accedi</button><br>
        <small>Non hai ancora un account?</small><br>
        <small>Registrati qui:</small>
        <a href="register.php">
            <small>REGISTRATI</small>
        </a> 
    </form>
</body>
</html>