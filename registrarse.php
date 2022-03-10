<?php
    require 'configdb.php';
    error_reporting(0);

    $message = '';

    if(!empty($_POST['nombre']) &&
    !empty($_POST['apellido']) &&
    !empty($_POST['direccion']) &&
    !empty($_POST['telefono']) &&
    !empty($_POST['correo']) &&
    !empty($_POST['password'])
    ) {

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $password=$_POST['password'];
        // Para encriptar contraseña facilmente, 2 metodos:
        // $password = password_hash($passwors, PASSWORD_DEFAULT);
        // $password=password_hash($password, PASSWORD_BCRYPT);

        // $consulta = "SELECT * FROM usuarios";

        $insert = "INSERT INTO usuarios (nombre, apellido, direccion, telefono, correo, password ) VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$password')";

        $ejecutar = mysqli_query($conexion, $insert);
        if($ejecutar){
            $message =  "<h2>Usuario creado.</h2>";
            // echo var_dump($ejecutar);
        } else {
            $message = "<h2>Error de conexion con la BD, vuelve a intentarlo mas tarde</h2>";
            // echo var_dump($ejecutar);
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Registro de usuarios</title>
</head>
<body>
    <?php require 'partials/header.php';?>
    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Registro de usuario:</h1>
    <span>o <a href="login.php">Iniciar Sesión</a></span>
    <form action="registrarse.php" method="POST">
        <input type="text" name="nombre" placeholder="Introduce tu nombre">
        <input type="text" name="apellido" placeholder="Introduce tu apellido">
        <input type="text" name="direccion" placeholder="Introduce tu direccion">
        <input type="text" name="telefono" placeholder="Introduce tu telefono">
        <input type="email" name="correo" placeholder="Introduce tu correo">
        <input type="password" name="password" placeholder="Introduce tu password">
        <!-- <input type="password" name="confirm_password" placeholder="Confirma tu password"> -->
        <input type="submit" value="Registarse">
    </form>
</body>
</html>