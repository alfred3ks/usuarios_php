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
    <title>Iniciar Sesion</title>
</head>
<body>
    <?php require 'partials/header.php'; ?>
    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <h1>Iniciar Sesión:</h1>
    <span>o <a href="registrarse.php">Registrarse</a></span>

    <form action="validar_usuario.php" method="POST">
        <input type="email" name="email" placeholder="Introduce tu correo">
        <input type="password" name="password" placeholder="Introduce tu contraseña">
        <input type="submit" name="btnlogin" value="Enviar">
    </form>

</body>

</html>