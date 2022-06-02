<?php

include 'Paciente.php';

if (isset($_REQUEST['id'])) {
    $paciente = Paciente::getById($_REQUEST['id']);    
}


include 'edit.view.php';