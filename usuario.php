<?php
    require 'configdb.php';
    error_reporting(0);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Usuario</title>
</head>
<body>
    <?php require 'partials/header_user.php';?>
    <h1>Bienvenido a tu area de Usuario:</h1>
    <?php
    $sesion = $_SESSION["usuario"];
    // $consulta = "SELECT * FROM usuarios WHERE correo='luis@luis.com'";
    $consulta = "SELECT * FROM usuarios WHERE correo='$sesion'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_row($resultado);
    ?>
    <div class="container">
        <div class="saludo">
            <h2>Hola <?php echo $fila[1] ;?></h2>
            <h3>Tus datos de contacto son:</h3>
        </div>
        <div class="datos">
            <h3> Nombre: <?php echo $fila[1] ?></h3>
            <h3> Apellido: <?php echo $fila[2] ?></h3>
            <h3> Direccion: <?php echo $fila[3] ?></h3>
            <h3> Telefono: <?php echo $fila[4] ?></h3>
            <h3> Correo de contacto: <?php echo $fila[5] ?></h3>
        </div>
    </div>
    <form action="login.php">
        <input type="submit" value="Cerrar sesión">
    </form>
</body>
</html>