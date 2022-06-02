<?php 
include 'Paciente.php';

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fecnac'])) {
    $paciente = new Paciente();
    $paciente->nombre = $_POST['nombre'];
    $paciente->apellido = $_POST['apellido'];
    $paciente->fecnac = $_POST['fecnac'];
    $paciente->create();
    
    header("Location: index.php?res=Usuario creado con éxito");
}