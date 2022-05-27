<?php

include_once 'Zombie.php';
include_once 'Humano.php';

$humano = new Humano;
$zombie = new Zombie;

echo "Humano y Zombie se suben al ring y comienza la batalla!!<br><br>";

while ($humano->getVida() > 0 && $zombie->getVida() > 0) {
    $quienGolpea = rand(0, 1);
    $golpeaConArma = rand(0, 1);
    $pocion = rand(0, 1);

    if ($quienGolpea == 1) {
        if ($zombie->getVida() < 50 && $pocion == 1) {
            echo "🧟 se encuentra debil (".$zombie->getVida().")";
            $zombie->sanar();
            echo " y decide tomar una poción 💉 para incrementar su vida a <b>" . $zombie->getVida() . "</b> puntos!!!<br><br>";
        } else {
            echo "La suerte está del lado del 🧟 quien tiene lugar para dar su golpe!!<br>";
            if ($golpeaConArma == 1) {

                $golpe = $zombie->golpearConArma();
                $humano->recibirGolpe($golpe);

                if ($humano->getVida() <= 0) {
                    echo "Humano ha recibido un golpe fatal y ha muerto!!<br>Zombie ha ganado la batalla y ha finalizado su vida con <b>" . $zombie->getVida() . "</b> puntos!!<br><br>";
                    break;
                } else {
                    echo "Humano ha recibido un golpe de <b>" . $golpe . "</b> puntos con el arma del zombie y su vida ha quedado en <b>" . $humano->getVida() . "</b>!! 🔫<br><br>";
                }
            } else {
                $golpe = $zombie->golpear();
                $humano->recibirGolpe($golpe);

                if ($humano->getVida() <= 0) {
                    echo "Humano ha recibido un golpe fatal y ha muerto!!<br> Zombie ha ganado la batalla y ha finalizado su vida con <b>" . $zombie->getVida() . "</b> puntos!!<br><br>";
                    break;
                } else {
                    echo "Humano ha recibido un golpe de <b>" . $golpe . "</b> puntos y su vida ha quedado en <b>" . $humano->getVida() . "</b>!! 👊<br><br>";
                }
            }
        }
    } else {
        if ($humano->getVida() < 50 && $pocion == 1) {

            echo "🧔 se encuentra debil (".$humano->getVida().")";
            $humano->sanar();
            echo " y decide tomar una poción 💉 para incrementar su vida a <b>" . $humano->getVida() . "</b> puntos!!!<br><br>";
        } else {
            echo "La suerte está del lado del 🧔 quien tiene lugar para dar su golpe!!<br>";
            if ($golpeaConArma == 1) {
                $golpe = $humano->golpearConArma();
                $zombie->recibirGolpe($golpe);

                if ($zombie->getVida() <= 0) {
                    echo "Zombie ha recibido un golpe fatal y ha muerto!!<br> Humano ha ganado la batalla y ha finalizado su vida con <b>" . $humano->getVida() . "</b> puntos!!<br><br>";
                    break;
                } else {
                    echo "Zombie ha recibido un golpe de <b>" . $golpe . "</b> puntos con el arma del humano y su vida ha quedado en <b>" . $zombie->getVida() . "</b>!! 🔫 <br><br>";
                }
            } else {
                $golpe = $humano->golpear();
                $zombie->recibirGolpe($golpe);

                if ($zombie->getVida() <= 0) {
                    echo "Zombie ha recibido un golpe fatal y ha muerto!!<br>Humano ha ganado la batalla y ha finalizado su vida con <b>" . $humano->getVida() . "</b> puntos!!<br><br>";
                    break;
                } else {
                    echo "Zombie ha recibido un golpe de <b>" . $golpe . "</b> puntos y su vida ha quedado en <b>" . $zombie->getVida() . "</b>!! 👊<br><br>";
                }
            }
        }
    }
}
