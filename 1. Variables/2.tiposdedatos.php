<?php

// //Debilmente tipado - no hace falta declarar el tipo de dato

// $nombre = "Nicolás"; //string
// $apellido = "-Rotili"; //string
// $nombreCompleto = "$nombre y $apellido"; //Nicolas y -Rotili
// $nombreCompleto = $nombre . " " . $apellido;  //$nombre $apellido
// $edad = 28; //int
// $altura = 1.70; //float
// $casado = false; //boolean
// $hijos = null; //null

// echo "Nombre completo: $nombreCompleto2 <br>";
// echo "Edad: $edad <br>";
// echo "Altura: $altura <br>";
// echo "Casado: $casado <br>";
// echo "Hijos: $hijos <br>";
// echo "<hr>";

// // Array unidimensional
// $datos = array("Nicolás Rotili", 28, 1.70, true, null);
// $datos = ["Nicolás Rotili", 28, 1.70, true, null];

// echo "Array unidimensional: <br>";
// // echo "Nombre completo: $datos[0] <br>";
// // echo "Edad: $datos[1] <br>";
// // echo "Altura: $datos[2] <br>";
// // echo "Casado: $datos[3] <br>";
// // echo $datos;
// var_dump($datos);
// echo "<hr>";



// // Array asociativo
// $datos = array(
//     "nombre" => "Nicolás",
//     "apellido" => "Rotili",
//     "edad" => 28,
//     "altura" => 1.70,
//     "casado" => false,
//     "hijos" => null,
// );

// $datos = [
//     "nombre" => "Nicolás",
//     "apellido" => "Rotili",
//     "edad" => 28,
//     "altura" => 1.70,
//     "casado" => false,
//     "hijos" => null,
// ];


// echo "Array asociativo: <br>";
// echo "Nombre: $datos[nombre] <br>";
// echo "Apellido: $datos[apellido] <br>";
// echo "Edad: $datos[edad] <br>";
// echo "Altura: $datos[altura] <br>";
// echo "Casado: " . ($datos["casado"] ? 'Si' : 'No') . '<br>';
// echo "Hijos: $datos[hijos] <br>";
// echo "<hr>";



// // Array multidimensional
// $coches = array(
//     array(
//         "marca" => "Seat",
//         "modelo" => "Ibiza",
        
//         "año" => 2015,
//     ),
//     array(
//         "marca" => "Renault",
//         "modelo" => "Megane",
//         "año" => 2015,
//     ),
// );

$coches = [
    [
        "marca" => "Seat",
        "modelo" => "Ibiza",
        "domicilio" => [
            "empresa"=>"Rouen",
            "categoria"=>"usados",
        ],   
        "año" => 2015,
    ],
    [
        "marca" => "Renault",
        "modelo" => "Megane",
        "año" => 2015,
    ],
];


// // var_dump($coches);
// echo "Array multidimensional: <br>";
// echo "Marca: ".$coches[0]['marca']." <br>";
// echo "Modelo: ". $coches[0]['modelo']." <br>";
echo "Modelo: ". $coches[0]['domicilio']['categoria']." <br>";
// // var_dump($coches[0]['domicilio']);
// echo "Año: ". $coches[0]['año']." <br>";
// echo "Marca: ". $coches[1]['marca']." <br>";
// echo "Modelo: ". $coches[1]['modelo']." <br>";
// echo "Año: ". $coches[1]['año']." <br>";
echo "<hr>";
