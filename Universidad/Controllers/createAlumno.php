<?php

require_once __DIR__ .'/../Model/Alumno.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimiento;
    $alumno->create();

    // echo "Nombre: $nombre, Apellido: $apellido, Fecha de Nacimiento: $fecha_nacimiento";

    // echo "Se presionó el botón de enviar formulario";
} else {
    echo "No se presionó el botón de enviar formulario";
}

require_once __DIR__ .'/../Views/createAlumno.view.php';
