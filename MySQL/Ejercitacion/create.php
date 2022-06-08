<?php

include_once './clases/Paciente.php';
session_start();

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fechanacimiento'])) {
    $paciente = new Paciente();
    $paciente->nombre = $_POST['nombre'];
    $paciente->apellido = $_POST['apellido'];
    $paciente->fechanacimiento = $_POST['fechanacimiento'];
    $paciente->create();

    //Session info
    $_SESSION['info'] = 'Paciente creado correctamente';

    header('Location: ./index.php');
}

include_once '.\vistas\create.view.php';