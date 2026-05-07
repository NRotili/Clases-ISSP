<?php

class Zombie
{

    public $vida = 100;

    public function recibirGolpe($daño)
    {
        $this->vida = $this->vida - $daño;
    }

    public function golpear()
    {
        return rand(5, 20);
    }
}
