<?php
require_once './Clases/Medico.php';
$medico = Medico::getMedicoById(1);

echo $medico->especialidad()->especialidad;