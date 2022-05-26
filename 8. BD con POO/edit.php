<?php

include 'Paciente.php';

if (isset($_REQUEST['id'])) {
    $paciente = Paciente::getById($_REQUEST['id']);

    echo $paciente->id;
    
}

if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['fecnac'])) {
    $paciente = Paciente::getById($_REQUEST['id']);
    $paciente->nombre = $_REQUEST['nombre'];
    $paciente->apellido = $_REQUEST['apellido'];
    $paciente->fecnac = $_REQUEST['fecnac'];
    $paciente->update();
    header("Location: index.php?res=Paciente actualizado correctamente");
}


include 'edit.view.php';