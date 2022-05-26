<?php

class Zombie{

    public $vida = 75;


    public function golpear()
    {
        return rand(0,20);
    }
    
    public function recibirGolpe($golpe)
    {
        $this->vida -= $golpe;
        return $this->vida;
    }
}