<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>header</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"> Vinili e Vinelli </div>
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="cantina.php">CANTINA</a></li>
                <li><a href="magazzino.php">MAGAZZINO</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <a href="carrello.php"> 
                    <li><div id="carrello-count" style="color:aliceblue">
                    🛒Carrello: <span><?= isset($_SESSION['carrello']) ? array_sum($_SESSION['carrello']) : 0 ?></span>
                </div></li>
                </a>
                
                
            </ul>
        </nav>
    </header>
</body>
</html>