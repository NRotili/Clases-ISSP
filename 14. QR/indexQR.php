<?php

require_once 'lib/barcode.php';

$generator = new barcode_generator();




/* Generate SVG markup and write to standard output. */
header('Content-Type: image/svg+xml');
$svg = $generator->render_svg('qr', "http://192.168.2.117/clases-ISSP/14.%20QR/indexHola.php?hola=",[
    'w'=> 300,
    'h'=> 300,
    'bc' => '#00f2df',
    'cs' => '#ed0000ff',
    'cm' => '#fff',
    // 'ms' => 'x'
]);
echo $svg;
