<?php
require('vendor/fpdf/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
$pdf->Ln(10);

// $pdf->Output('I', 'hola.pdf', true);

//Save to directory
$pdf->Output('F', 'PDF/hola.pdf', true);


?>