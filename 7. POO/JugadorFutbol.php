<?php

require_once 'Persona.php';

class JugadorFutbol extends Persona {

    public $posicion;
    public $numero;
    protected $equipo;

    public function jugarPartido() {
        echo 'El jugador juega un partido';
    }

    public function entrenar() {
        echo 'El jugador entrena';
    }

    public function saludar() {
        echo 'El jugador viaja';
    }

}