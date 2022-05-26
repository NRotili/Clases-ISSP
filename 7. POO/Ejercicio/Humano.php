<?php

class Humano {
    public $vida=100;

    public function golpear()
    {
        return rand(5,15);
    }

    public function recibirGolpe($golpe)
    {
        $this->vida -= $golpe;
        return $this->vida;
    }

    
}