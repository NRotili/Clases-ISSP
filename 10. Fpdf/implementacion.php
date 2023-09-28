<?php
require('vendor/fpdf/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
$pdf->Ln(10);
$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));

$pdf->Output();


?>