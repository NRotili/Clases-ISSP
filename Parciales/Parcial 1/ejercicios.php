<?php

function escribirArray($array)
{
    foreach ($array as $key => $value) {
        echo $key.": ".$value."<br>";
    }
}

function mayorDe3Valores($num1, $num2, $num3)
{
    if ($num1 > $num2 && $num1 > $num3) {
        return $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

echo mayorDe3Valores(6,5,3);


$array = array("nombre" => "Juan", "apellido" => "Perez", "edad" => "23");

$arrayAutos = array(
    "nombre" => "Ferrari",
    "modelo" => "458",
    "color" => "Rojo",
    "precio" => "100000",
    "fecha" => "01/01/2020"
);

escribirArray($arrayAutos);

//loop with error control

$i = 0;
while ($i <= 10) {
    echo $i."<br>";
    $i++;
}

function estacionamiento($tipo, $horas){
    //tipo 1 auto
    //tipo 2 camioneta
    $montoHsAuto = 200;
    $montoHsCamioneta = 300;
    if ($tipo == 1) {
        if ($horas < 7) {
            return $horas * $montoHsAuto;
        } else {
            return $montoHsAuto * 7;
        }
    } else {
        if ($horas < 7) {
            return $horas * $montoHsCamioneta;
        } else {
            return $montoHsCamioneta * 7;
        }
    }
}


