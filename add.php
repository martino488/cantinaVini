<?php 

session_start();


$id = $_POST['id'] ?? null;


if(isset($_POST['id'])){
    $id = $_POST['id'];
}

if(!isset($_SESSION['carrello'])){
    $_SESSION['carrello'] = [];
    
}

if ($id){
    if(isset($_SESSION['carrello'][$id] )){
        $_SESSION['carrello'][$id]++;
    } else {
        $_SESSION['carrello'] [$id] = 1;
}
    echo array_sum($_SESSION['carrello']);
}

?>