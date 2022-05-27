<?php

class Humano
{

    # Atributos
    protected $vida = 100;
    protected $arma;

    # Método Constructor
    public function __construct()
    {

        $arma = rand(0,1);
        if ($arma == 1) {
            $this->arma = true;
        } else {
            $this->arma = false;
        }

        if ($this->arma) {
            echo "Grrrrrrr, soy un humano 💪 y estoy armado!!!<br> Mi salud es de $this->vida y lucharé hasta la muerte!!<br><br>";
        } else {
            echo "Grrrrrrr, soy un humano 💪 y no estoy armado!!!<br> Mi salud es de $this->vida y lucharé hasta la muerte!!<br><br>";
        }

    }

    # Métodos Setters
    public function setVida(int $vida)
    {
        $this->vida = $vida;
    }

    public function setArma(bool $arma)
    {
        $this->arma = $arma;
    }

    # Métodos Getters
    public function getArma()
    {
        return $this->arma;
    }

    public function getVida()
    {
        return $this->vida;
    }
 

    # Métodos
    public function recibirGolpe($golpe)
    {
        $this->vida -= $golpe;
    }

    public function golpear()
    {
        return rand(0, 20);
    }

    public function golpearConArma()
    {
        return rand(10, 35);
    }

    public function sanar()
    {
        $rand = rand(5,20);
        $this->vida += $rand;

    }
}
