<?php 
session_start(); 
require_once 'config.php'; 
require_once 'class/database.php'; 

// --- 1. LOGICA DI LOGIN (Il "Motore") ---
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['username'], $_POST['password'])) {
    $user_input = trim($_POST['username']);
    $pass_input = trim($_POST['password']);
    
    
    $sql    = "SELECT * FROM utenti WHERE username = :username";
    $pars   = [':username' => $user_input];
    $utente_trovato = queryExec($sql, $pars);

    $utente = (isset($utente_trovato[0])) ? $utente_trovato[0] : $utente_trovato;

   
    if ($utente && password_verify($pass_input, $utente['password'])) {
        if (session_status() === PHP_SESSION_NONE) session_start();
        
        $_SESSION['username'] = $utente['username']; 
        session_write_close();
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php?errore=1");
        exit();
    }
}

// --- 2. RECUPERO DATI DAL DB ---
$query = "SELECT * FROM vini";
$immaginiVini = queryExec($query);
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/index.css">
    <title>Vinili e Vinelli - Cantina</title>
</head>
<body>

    <?php include_once 'templates/header.php' ?>

    
        <?php if (isset($_SESSION['username'])): ?>
            
            <div class="img-grid">
                <?php foreach($immaginiVini as $vino) : ?>
                    <div class="img-card">
                     <a href="vino.php?id=<?php echo ($vino['id']); ?>">
                        <img src="<?php echo $vino['immagine'] ? BASE_URL."/assets/img/".$vino['immagine'] : BASE_URL."/assets/img/default.jpg"; ?>">
                    </a>
                        
                              <div class="img-info">
                            <h3><?php echo htmlspecialchars($vino['nome']); ?></h3>
                            <p><?php echo htmlspecialchars($vino['anno']); ?></p>
                        
                        </div>
                      
                    </div>
                <?php endforeach ?>
            </div>

            <div class="desc-storia">
                <h1 class="titolo">La Nostra Filosofia</h1>
                <p>Benvenuto, <?php echo htmlspecialchars($_SESSION['username']); ?>. 
                Qui la tradizione incontra la passione per il buon vino.</p>
            </div>

        <?php else: ?>
            
            <div class="access-denied">
                <h2>Ehilà marti! Non puoi sbirciare i vini senza invito.</h2>
                <p>Devi prima fare il login per accedere alla nostra collezione privata.</p>
                <a href="login.php" class="btn-login">VAI AL LOGIN</a>
            </div>

        <?php endif; ?>
  

    <?php include_once 'templates/footer.php' ?>

</body>
</html>