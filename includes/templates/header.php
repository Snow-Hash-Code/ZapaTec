<?php 

    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZapaTec Store</title>
    <link rel="stylesheet" href="build/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/style.css">
</head>
<body>
    <header class="header">
        <a href="/">
            <img class="header__logo" src="build/img/logo.jpg" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="/">Tienda</a>
        <a class="navegacion__enlace" href="login.php">Login</a>
        <?php if($auth): ?>
            <a class="navegacion__enlace" href="inventario.php">inventario</a>
            <a class="navegacion__enlace" href="compras.php">Compra</a>
            <a class="navegacion__enlace" href="ws/cerrarSession.php">Cerrar Session</a>
        <?php endif; ?>
    </nav>