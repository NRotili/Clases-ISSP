<?php

$api = "https://rickandmortyapi.com/api/character";


$cliente = curl_init();
curl_setopt($cliente, CURLOPT_URL, $api);
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($cliente);
$personajes = json_decode($respuesta);

curl_close($cliente);
// var_dump($personajes);

// echo $respuesta;

require_once 'indexApi.view.php';