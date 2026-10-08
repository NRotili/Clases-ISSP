<?php

require('vendor/fpdf/fpdf.php');

class PDF extends FPDF{
    function Header(){
        $this->SetFont('Arial','B',16);
        $this->Cell(80);
        $this->Cell(30,10,'ISSP',1,0,'C');
        $this->Ln();
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');

    }
}

$pdf = new PDF();

$pdf->AddPage();


for($i = 1; $i <= 100; $i++){
    $pdf->Cell(0,10, 'Linea numero '.$i, 0, 1);
}

// $pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));

$pdf->Output('I', 'hola_mundo.pdf, true');

