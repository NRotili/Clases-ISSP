<?php

// WHILE LOOP
// $i = 1;
// while ($i <= 10):
//     $i++;
//     echo $i;
// endwhile;

// $f = 1;
// while ($f <= 10) {
//     echo $f++; 
// }

// //DO-WHILE
// $i=0;
// do {
//     echo $i++;
// } while ($i < 10);



// for ($i = 50; $i >= -10; $i--) {
//     // echo "<br>";
//     echo "$i,";
// }

// //array multidimensional
// $coches = [
//     [
//         "marca" => "Seat",
//         "modelo" => "Ibiza",
//         "año" => 2015,
//         "concesionaria" => [
//             "nombre" => "Concesionaria 1",
//             "direccion" => "C/ Madrid, 1",
//             "telefono" => "912345678"
//         ]
//     ],
//     [
//         "marca" => "Renault",
//         "modelo" => "Megane",
//         "año" => 2015,
//         "concesionaria" => [
//             "nombre" => "Concesionaria 2",
//             "direccion" => "C/ Madrid, 2",
//             "telefono" => "912345678"
//         ]
//     ],
// ];


// //Recorro Array con WHILE
// $i = 0;
// echo "Recorro Array con WHILE: <br><br>";
// while ($i < count($coches)) {
//     echo "Marca: ".$coches[$i]['marca']." <br>";
//     echo "Modelo:  ".$coches[$i]['modelo']." <br>";
//     echo "Año: ".$coches[$i]['año']." <br>";
//     echo "<hr>";
//     $i++;
// }

// //Recorro array con Do-While
// $i = 0;
// echo "Recorro Array con Do-While: <br><br>";
// do {
//     echo "Marca: ".$coches[$i]['marca']." <br>";
//     echo "Modelo: ".$coches[$i]['modelo']." <br>";
//     echo "Año: ".$coches[$i]['año']." <br>";
//     echo "<hr>";
//     $i++;
// } while ($i < count($coches));

// //Recorro array con for
// echo "Recorro Array con for: <br><br>";
// for ($i=0; $i < count($coches); $i++) { 
//     echo "Marca: ".$coches[$i]['marca']." <br>";
//     echo "Modelo: ".$coches[$i]['modelo']." <br>";
//     echo "Año: ".$coches[$i]['año']." <br>";
//     echo "<hr>";
// }

// //Recorro array con foreach
// echo "Recorro Array con foreach: <br><br>";
// foreach ($coches as $coche) {
//     echo "Marca: ".$coche['marca']." <br>";
//     echo "Modelo: ".$coche['modelo']." <br>";
//     echo "Año: ".$coche['año']." <br>";
//     echo "<hr>";
// }

$alumnos = [
    [
        "nombre" => "Juan",
        "edad" => 20,
        "notas" => [
            "mate" => 10,
            "fisica" => 8,
            "ingles" => 7
        ]
    ],
    [
        "nombre" => "Pedro",
        "edad" => 20,
        "notas" => [
            "Mate" => 10,
            "Fisica" => 8,
            "Ingles" => 7
        ]
    ],
    [
        "nombre" => "Maria",
        "edad" => 20,
        "notas" => [
            "mate" => 10,
            "fisica" => 8,
            "ingles" => 7
        ]
    ]
];

// //Foreach Alumnos
// foreach ($alumnos as $alumno) {
//     echo "Nombre: ".$alumno['nombre']." <br>";
//     echo "Edad: ".$alumno['edad']." <br>";
//     echo "Notas: <br>";
//     echo "Mate: ".$alumno['notas']['mate']."<br>";
//     echo "Fisica: ".$alumno['notas']['fisica']." <br>";
//     echo "Ingles: ".$alumno['notas']['ingles']." <br>";
//     echo "<hr>";
// }

// // Foreach Alumnos
// foreach ($alumnos as $key => $alumno) {
//     echo $key . " : ". $alumno['nombre']." <br>";
//     echo "Edad: ".$alumno['edad']." <br>";
//     echo "Notas: <br>";
//     foreach ($alumno['notas'] as $key => $nota) {
//         echo $key.": ".$nota." <br>";
//     }
//     echo "<hr>";
// }

//Break;

// $i = 0;
// while (++$i) {
//     switch ($i) { // recibo 10
//         case 5:
//             echo "En 5, salgo del switch pero 
//             continúo ejecutando el while.<br />";
//             break 1;
//         case 10:
//             echo "En 10; salgo del switch y del while.<br />";
//             break 2;
//         default:
//             break;
//     }
// }

//mostrar valores pares for y continue

// for ($i = 0; $i <= 10; ++$i) {
//     if ($i % 2 !=0) {	
//         continue;
//     }
//     echo "$i\n";
// }


//Estructura RAND

// $random= rand(1,10);
// echo $random;


// echo suma(1,2);
// // //utilización de return
// function suma($num1, $num2) {
//     return $num1 + $num2;
// }

// include_once "2.incluirOK.php";
// // echo $informacion['nombre'];

// // require "2.incluirOK.php";
// echo "Hola después de require";
// echo $informacion['nombre'];

// //Tabla de multiplicar del 7 con for
// for ($i = 1; $i <= 10; $i++) {
//     echo "7 x $i = " . 7 * $i . "<br>";
// }

// $numero = 1;
// while ($numero <= 100) {
//     if ($numero % 2 == 0) {
//         echo $numero . "<br>";
//     }
//     $numero++;
// }

$arregloEjercicio = [];
for ($i=0; $i < 50; $i++) { 
    # code...
    // $arregloDe50Numeros[$i] = rand(1,10);
    array_push($arregloEjercicio, rand(1,10));
}

// $contador = 0;
// foreach ($arregloEjercicio as $numero){
//     // echo $numero . "<br>";
//     // echo $contador . " : " . $numero . "<br>";
//     if ($numero == 5) {
//         echo "El número 5 ha sido encontrado en la posición $contador <br>";
//     } 
//     $contador++;
// }

// var_dump($arregloDe50Numeros);

// foreach ($arregloEjercicio as $indice => $numero) {
//     # code...
//     if ($numero == 5) {
//         echo "El número 5 ha sido encontrado en la posición $indice <br>";
//     } 
// }

// $arreglo = array_find($arregloEjercicio, function($numero) {
//     return $numero == 5;
// });

var_dump($arregloEjercicio);

echo array_search(5, $arregloEjercicio);



