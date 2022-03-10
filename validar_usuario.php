<?php
    require 'configdb.php';
    error_reporting(0);

// Captamos los dos valores del formulario:
$email = $_POST['email'];
$password = $_POST['password'];
$btnlogin = $_POST['btnlogin'];

echo $password;

    if(!empty($_POST['email']) &&
    !empty($_POST['password']))
    {
        $consulta = "SELECT * FROM usuarios WHERE correo='$email' AND password='$password'";
        $resultado = mysqli_query($conexion, $consulta);

        // Vamos a contar:
        $num_row = mysqli_num_rows($resultado);
        $buscar_password = mysqli_fetch_array($resultado);

        if(($num_row == 1) && ($buscar_password['password']))
        {

            session_start();
            $_SESSION['usuario'] = $_POST['email'];
            header('Location: usuario.php');

        }else {
            header('Location: login.php');
        }
    } else {
        header('Location: login.php');
        }

?>