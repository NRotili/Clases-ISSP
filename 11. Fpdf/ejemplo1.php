<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header(){
        $this->Image('logo.png',10,8,20);
        $this->SetFont('Arial','B',16);
        $this->Cell(80);
        $this->Cell(50,10, 'Des. Sist. Web',1,0,'C');
        $this->Ln(20);
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Pag. '.$this->PageNo().'/{nb}',0,0,'C');

    }
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('¡Hola Mundo!'));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('¡Hola Mundo!'));
$pdf->AddPage();
for ($i=0; $i <= 100 ; $i++) { 
    $pdf->Cell(0,10, 'Linea numero'.$i,0,1);
}
$pdf->Output();
?>