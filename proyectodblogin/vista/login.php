
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | P&P</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/diseño.css">
</head>
<body>
<?php require '../partials/header.php' ?>
    <div class="login-box">
        <img class="avatar" src="../img/logo_lolsss.png" alt="Logo de Lols">
        <h1>Ingresa aqui</h1>
        <form action="login.php" method="post">
        <!-- user -->
        <label for="email">Email</label>
        <input type="text" placeholder="Ingrese su email">

        <!-- user -->
        <label for="password">Password</label>
        <input type="password" placeholder="Ingresa tu contraseña">

        <input type="submit" value="Login" placeholder="Log in">

        <a href="#">Perdiste tu contraseña? </a><br>
        <a href="registro.php">No tienes cuenta?</a>
        </form>
    </div>
</body>
</html>