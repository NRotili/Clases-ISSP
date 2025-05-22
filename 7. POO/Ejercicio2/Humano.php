<?php

class Humano {

    //Atributos
    public $vida = 100;

    //Métodos
    public function atacar() {
        return rand(5,20);
    }

    public function recibirGolpe($daño) {
        $this->vida -= $daño;
    }

   
}