<?php

class Zombie {

    //Atributos
    public $vida = 150;

    //Métodos
    public function atacar(){
        return rand(10,15);
    }

    public function recibirGolpe($daño){
        $this->vida = $this->vida - $daño;
    }

}