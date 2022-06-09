<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'functions.php';
$produk = query("SELECT * FROM drama join genre on genre.id_genre = drama.genre");

$pdf = new FPDF();
$pdf->SetAutoPageBreak(true,15);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20, "LAPORAN DATA DRAMA", '0', 1, 'C');

# header
$pdf->setFont('Arial','',12);
$yi = 44;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(10,6,'NO',1,0,'C',1);

$pdf->CELL(70,6,'judul_drama',1,0,'C',1);
$pdf->CELL(25,6,'genre',1,0,'C',1);
$pdf->CELL(55,6,'sutradara',1,0,'C',1);
$pdf->CELL(30,6,'rating_usia',1,0,'C',1);




$no = 1;
$row = 6;
$ya = $yi + $row;
foreach($produk as $pro){
    $pdf->setXY(10,$ya);
    $pdf->setFont('arial','',9);
    $pdf->setFillColor(255,255,255);
    $pdf->CELL(10,6,$no,1,0,'C',1);
    
    $pdf->Cell(70,6,$pro["judul_drama"],1,0,'L',1);
    $pdf->CELL(25,6,$pro["nama_genre"],1,0,'C',1);
    $pdf->CELL(55,6,$pro["sutradara"],1,0,'C',1);
    $pdf->CELL(30,6,$pro["rating_usia"],1,0,'C',1);
    
    $ya = $ya+$row;
    $no++;
}





$pdf->Output();

?>