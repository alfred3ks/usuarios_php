<?php
// Configuracion de la conexion con la BD;
    $server= 'localhost';
    $username = 'root';
    $password = '';
    $database = 'usuarios_db';

// Hacemos la coneccion con la BD
    $conexion = mysqli_connect($server, $username, $password) or die ("Error con el servidor de la Base de datos");

// Hacemos la conexion a la BD:
    $db = mysqli_select_db($conexion, $database);

    if($db){
        echo 'Conexion ok a BD.';
    } else {
        echo 'No hay conexion con BD.';
    }


?>