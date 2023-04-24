<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'id20503062_zapateria', 'ClienteServidor2315?', 'id20503062_zapatec');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}