<?php

require_once "usuario.php";

session_start();

//Si ya está logueado
if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php');
} else {
    if (isset($_POST['user']) && isset($_POST['password'])) {
        $usuario = $_POST['user'];
        $password = sha1($_POST['password']);
        $usuarioObtenido = Usuario::obtenerUsuario($usuario, $password);
        // var_dump($usuarioObtenido);
        if ($usuarioObtenido) {
            //Si existe usuario con el usuario y la contraseña correcta.
            $_SESSION['usuario'] = $usuarioObtenido;
            header('Location: dashboard.php');
        } else {
            echo "Usuario y/o contraseña incorrecta";
        }
    }
}


require_once "index.view.php";
