<?php

require_once __DIR__ .'/../Model/Alumno.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $alumno = Alumno::getById($id);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimiento;
    $alumno->update();

    header('Location: ../Controllers/indexAlumno.php');
} else  {
    $alumno = Alumno::getById($id);
    if ($alumno) {
        require_once __DIR__ .'/../Views/editarAlumno.view.php';
    }
}


