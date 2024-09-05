<?php 

require_once __DIR__ .'/../Model/Materia.php';

$materia = Materia::getById(1);


foreach ($materia->profesores() as $profesor) {
    echo "<p>$profesor->nombre</p>";
}