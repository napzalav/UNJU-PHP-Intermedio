<?php
require('libraries/fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddFont('CevicheOne','','CevicheOne-Regular.php',".");
$pdf->AddPage();
$pdf->SetFont('CevicheOne','',45);
$pdf->Write(10,'Disfruta de nuevas fuentes con FPDF!');
$pdf->Output();
?>