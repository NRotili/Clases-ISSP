<?php
require_once './Clases/Medico.php';
require_once './Clases/Especialidad.php';
// $medico = Medico::getMedicoById(1);

// echo $medico->especialidad()->especialidad;

//Solicitamos la especialidad Pediatría
$especialidad = Especialidad::getEspecialidadById(4);
//Buscamos los médicos con especialidad Pediatría
$medicos = $especialidad->medicos();
//Recorremos con foreach los pediatras.
foreach ($medicos as $medico) {
    echo "$medico->nombre $medico->apellido <br>";
}


