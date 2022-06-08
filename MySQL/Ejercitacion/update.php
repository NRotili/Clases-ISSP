<?php

//Incluyo modelo Paciente
require_once './clases/Paciente.php';
session_start();

//Obtengo por get el ID
$id = $_GET['id'];
//Obtengo paciente por id
$paciente = Paciente::getPacienteById($id);

//Compruebo que existan las superglobales
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fechanacimiento'])) {
    //Actualizo paciente
    $paciente->nombre = $_POST['nombre'];
    $paciente->apellido = $_POST['apellido'];
    $paciente->fechanacimiento = $_POST['fechanacimiento'];
    $paciente->update();
    //Redirijo a index
    $_SESSION['info'] = 'Paciente actualizado correctamente';
    header('Location: index.php');
}



//Incluyo Vista Update
include_once './vistas/update.view.php';