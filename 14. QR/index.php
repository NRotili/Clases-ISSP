<?php

//url library: https://github.com/kreativekorp/barcode

require 'lib/barcode.php';

$generator = new barcode_generator();
header('Content-Type: image/svg+xml');
$svg = $generator->render_svg('qr', "google.com", [
    'w' => 300,
    'h' => 300,
    // 'bc' => '#00f2df', //color de fondo
    // 'cs' => '#000000', //color de los espacios
    // 'cm' => '#ffffff', //color módulos
    'ms' => 's' // s: square, r: round, x: cross
]);
echo $svg;