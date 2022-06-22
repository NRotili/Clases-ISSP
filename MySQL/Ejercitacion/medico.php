<?php
require_once './Clases/Paciente.php';

$medico = Medico::getMedicoById(1);

foreach ($medico->pacientes() as $paciente) {
    echo "$paciente->apellido, $paciente->nombre <br>" ;
}
