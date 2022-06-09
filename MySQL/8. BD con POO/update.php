<?php
include 'Paciente.php';
if (isset($_REQUEST['save'])) {
    $paciente = Paciente::getById($_REQUEST['id']);
    $paciente->nombre = $_REQUEST['nombre'];
    $paciente->apellido = $_REQUEST['apellido'];
    $paciente->fecnac = $_REQUEST['fecnac'];
    $paciente->update();
    header('Location: index.php');
}