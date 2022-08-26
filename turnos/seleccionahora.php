<?php

require_once './Clases/Configuracion.php';
require_once './Clases/Turno.php';

if (isset($_POST['dia']) && !(isset($_POST['reservar']))) {

    //Numero de dia de la semana
    $dia = date("N", strtotime($_POST['dia']));
    $fecha = $_POST['dia'];

    //Obtengo configuracion segun día
    $configuracion = Configuracion::getApertura($dia);
  
    $hora = $configuracion->apertura;
    $turnos= [];
    while ($hora <= $configuracion->cierre) {
        
        //Compruebo disponibilidad de turno
        $turno = Turno::getTurnosByFechaAndHour($fecha, $hora);
        if ($turno == null) {
            array_push($turnos, $hora);
        }
        $hora = date("H:i", strtotime("+$configuracion->rango minutes", strtotime($hora)));
    }
} else {
    if (isset($_POST['reservar'])) {

        foreach ($_POST['turnosReserva'] as $turnoReserva) {
            $turno = new Turno();
            $turno->fecha = $_POST['dia'];
            $turno->hora = $turnoReserva;
            $turno->id_cliente = 1;
            
            
            $turno->crearTurno();
        }
        
    }
}



include_once './Vistas/seleccionahora.view.php';
