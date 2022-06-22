<?php

require_once './Clases/Usuario.php';
session_start();

if (!(isset($_SESSION['user']))) {
    //Redirecciono a login
    header('Location: login.php');
}

//objeto en variable de session
echo $_SESSION['user']->user;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php" class="btn btn-secondary">Cerrar sesión</a>
</body>
</html>