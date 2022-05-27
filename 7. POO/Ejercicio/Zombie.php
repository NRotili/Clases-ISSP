<?php

class Zombie
{

    # Atributos
    protected $vida;
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

        $this->vida=rand(75,150);

        if ($this->arma) {
            echo "Aghhh, soy un zombie 🧟 y estoy armado!!!<br> Mi salud es de $this->vida y lucharé hasta la muerte!!<br><br>";
        } else {
            echo "Aghhh, soy un zombie 🧟 y no estoy armado!!!<br> Mi salud es de $this->vida y lucharé hasta la muerte!!<br><br>";
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
    public function golpear()
    {
        return rand(0, 20);
    }

    public function recibirGolpe($golpe)
    {
        $this->vida -= $golpe;
    }

    public function golpearConArma()
    {
        return rand(10, 35);
    }

    public function sanar()
    {
        $this->vida += rand(5,20);
    }
}