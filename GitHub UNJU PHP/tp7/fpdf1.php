<?php
require('libraries/fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage(); //agregar una nueva pagina
$pdf->SetFont('Arial','B',16); //se pasa por parametros la FUENTE, TIPO y TAMAÑO
$pdf->Cell(60,10,'Hecho con FPDF.',0,1,'C'); //se pasa por parametro el LARGO de la celda, el ALTO de la celda y el TEXTO
$pdf->Output();


//
?>