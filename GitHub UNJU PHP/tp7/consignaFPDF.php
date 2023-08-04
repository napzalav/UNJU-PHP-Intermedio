<?php
require('libraries/fpdf186/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('assets/avatar.png', 10, 8, 25);
        // configuracion para la cabecera
        $this->SetFont('Arial', 'B', 30);
        // Cabecera
        $this->Cell(0, 10, 'Argentina Programa', 0, 0, 'C');
        // Salto de línea
        $this->Ln(40);

        //configuracion para el titulo
        $this->SetFont('Times', 'I', 24);
        $this->Cell(30, 10, 'FPDF', 0, 0, 'L');
        $this->Ln();

        //configuracion para el cuerpo
        $this->SetFont('Times', 'I', 14);
        //$this->SetFont('','I');

        // Imprimimos el texto justificado
        $this->MultiCell(0, 10, 'FPDF es una clase escrita en PHP que permite generar documentos PDF directamente desde PHP, es decir, sin usar la biblioteca PDFlib. La F de FPDF significa Free (gratis y libre): puede usted usarla para cualquier proposito y modificarla a su gusto para satisfacer sus necesidades.', 1);
    }

    function Footer()
    {
        // Posición a 1,5 cm del final
        $this->SetY(-15);
        // Arial itálica 8
        $this->SetFont('Arial', 'I', 14);
        // Color del texto en gris
        $this->SetTextColor(100);
        // Número de página
        $this->Cell(0, 10, 'Cesar Alavila', 1, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage(); //agregar una nueva pagina
$pdf->SetFont('Arial', 'B', 16); //se pasa por parametros la FUENTE, TIPO y TAMAÑO

$pdf->Output();

?>