<?php

require_once './Clases/Usuario.php';

session_start();

if (isset($_SESSION['user'])) {
    header('Location: index.php');
} else {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = sha1($_POST['pass']);
        $usuario = Usuario::getUser($user, $pass);
        if ($usuario) {
            $_SESSION['user'] = $usuario;
            header('Location: index.php');
        } else {
            $_SESSION['info'] = 'Usuario o contraseña incorrectos';
        }
    }
}

include_once './Vistas/login.view.php';
