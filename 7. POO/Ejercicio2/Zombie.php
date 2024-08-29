<?php

class Zombie {

    //Atributos
    public $vida = 100;

    //Métodos
    public function recibirGolpe($vida) {
        $this->vida -= $vida;
    }

    public function atacar() {
        return rand(0, 10);
    }
}