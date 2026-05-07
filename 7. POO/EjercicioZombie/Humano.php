<?php

class Humano {

    //Atributos
    public $vida = 100;
    //Métodos

    public function recibirGolpe($daño)
    {
        $this->vida = $this->vida - $daño;
    }
    public function golpear() {
        return rand(5,20);
    }
}