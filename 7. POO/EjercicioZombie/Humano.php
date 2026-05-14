<?php

class Humano {

    //Atributos
    public $vida = 100;
    //Métodos

    public function tomarPocion(){
        $this->vida += rand(10,15);
    }

    public function recibirGolpe($daño)
    {
        $this->vida = $this->vida - $daño;
    }
    public function golpear() {
        return rand(5,20);
    }
}