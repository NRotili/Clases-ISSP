<?php

require_once './Clases/Medico.php';
require_once './Clases/Paciente.php';

// $paciente = Paciente::getPacienteById(2);

// $medicos = $paciente->medicos();

// foreach ($medicos as $medico) {
//     echo "$medico->nombre $medico->apellido <br>";
// }

$medico = Medico::getMedicoById(1);

$pacientes = $medico->pacientes();

foreach ($pacientes as $paciente) {
    echo "$paciente->nombre $paciente->apellido <br>";
}
