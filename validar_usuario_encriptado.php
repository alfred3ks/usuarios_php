<?php
    require 'configdb.php';
    error_reporting(0);

    // Para encriptar contraseña facilmente
    // $pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);

    // Captamos los dos valores del formulario:
    $email = $_POST['email'];
    $password = $_POST['password'];
    $btnlogin = $_POST['btnlogin'];

    // Validamos al pulsar el boton de enviar
    if(!empty($_POST['email']) &&
    !empty($_POST['password'])){

        $consulta = "SELECT * FROM usuarios WHERE correo='$email' AND password= '$password'";
        $resultado = mysqli_query($conexion, $consulta);

        // Vamos a contar:
        $num_row = mysqli_num_rows($resultado);
        $buscar_password = mysqli_fetch_array($resultado);

        // Hacemos la verificacion con password encriptado:
        if(($num_row == 1) && (password_verify($password, $buscar_password['password'])))
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
