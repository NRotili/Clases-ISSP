<?php

//WHILE LOOP
// $i = 1;
// while ($i <= 10):
//     echo $i;
//     $i++;
// endwhile;

// $f = 1;
// while ($f <= 10) {
//     echo $f++; 
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo "<br>";
//     echo $i;
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

// $alumnos = [
//     [
//         "nombre" => "Juan",
//         "edad" => 20,
//         "notas" => [
//             "mate" => 10,
//             "fisica" => 8,
//             "ingles" => 7
//         ]
//     ],
//     [
//         "nombre" => "Pedro",
//         "edad" => 20,
//         "notas" => [
//             "mate" => 10,
//             "fisica" => 8,
//             "ingles" => 7
//         ]
//     ],
// ];

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

//Foreach Alumnos
// foreach ($alumnos as $key => $alumno) {
//     echo "Nombre: ".$alumno['nombre']." <br>";
//     echo "Edad: ".$alumno['edad']." <br>";
//     echo "Notas: <br>";
//     foreach ($alumno['notas'] as $key => $nota) {
//         echo $key.": ".$nota." <br>";
//     }
//     echo "<hr>";
// }

// //Break;

// $i = 0;
// while (++$i) {
//     switch ($i) {
//     case 5:
//         echo "En 5, salgo del switch pero 
//             continúo ejecutando el while.<br />";
//         break 1; 
//     case 10:
//         echo "En 10; salgo del switch y del while.<br />";
//         break 2;  
//     default:
//         break;
//     }
// }

//mostrar valores pares for y continue

// for ($i = 0; $i <= 10; ++$i) {
//     if ($i % 2 !=0) {	
//         continue;
//     }
//     echo "$i\n";
// }


// //utilización de return
// function suma($num1, $num2) {
//     return $num1 + $num2;
// }
