<?php

    require '../includes/config/database.php';

    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = mysqli_real_escape_string($db, $_POST['usuario']);
        $password = mysqli_real_escape_string($dn, $_POST['password']);

        if(!$email) {
            header('Location:/login.php');
        }
        if(!$password) {
            header('Location:/login.php');
        }
    }

    $query = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado = mysqli_query($db, $query);

    if($resultado->num_rows) {
        $usuario = mysqli_fetch_assoc($resultado);

        if($usuario['contraseña'] == $_POST['password']) {
            session_start();
            $_SESSION['usuario'] = $usuario['email'];
            $_SESSION['login'] = true;
            
            header('Location:/');
        } else {
            header('Location:/login.php');
        }
    } else {
        header('Location:/login.php');
    }
?>