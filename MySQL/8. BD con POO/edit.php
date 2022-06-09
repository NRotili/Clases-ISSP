<?php

include 'Paciente.php';
$id = $_GET['id'];
$paciente = Paciente::getById($id);
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fecnac'])) {
    //Actualizo paciente
    $paciente->nombre = $_POST['nombre'];
    $paciente->apellido = $_POST['apellido'];
    $paciente->fecnac = $_POST['fecnac'];
    $paciente->update();
    //Redirijo a index
    header('Location: index.php');
}

//Incluyo Vista Edit
include 'edit.view.php';