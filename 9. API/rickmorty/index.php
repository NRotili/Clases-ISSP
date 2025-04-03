<?php

if(isset($_POST["next"])){
    $api = $_POST["next"];
} elseif(isset($_POST["prev"])){
    $api = $_POST["prev"];
} else {
    $api = "https://rickandmortyapi.com/api/character";
}

// $api = "https://rickandmortyapi.com/api/";

$cliente = curl_init();

curl_setopt($cliente, CURLOPT_URL, $api);
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);

// try {
    
//     $respuesta = curl_exec($cliente);
//     $personajes = json_decode($respuesta);

// } catch (\Throwable $th) {
//     echo "Error: " . $th->getMessage();
// }

if (curl_errno($cliente)) {
    echo "Error: " . curl_error($cliente);
} else {
    $respuesta = curl_exec($cliente);
    $personajes = json_decode($respuesta);
}

curl_close($cliente);

require "indexRick.view.php";

// var_dump($personajes);