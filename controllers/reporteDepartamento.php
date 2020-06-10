<?php

require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'Reporte de Departamentos',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    
    $this->Cell(10,10,'ID', 1, 0, 'C', 0);    
    $this->Cell(40,10,'Nombre', 1, 0, 'C', 0);    
    $this->Cell(60,10,utf8_decode('Fecha de creación'), 1, 0, 'C', 0);    
    $this->Cell(60,10,utf8_decode('Fecha de modificación'), 1, 0, 'C', 0);    
    $this->Cell(25,10,'Estado',1,1, 'C', 0);   
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require('cx.php');
$consulta = "SELECT * FROM departamentos";
$cositas = $mysqli->query($consulta);


$pdf = new PDF();
$pdf->AddPage();
$pdf->aliasNbPages();
$pdf->SetFont('Arial','',11);
while($fila = $cositas->fetch_assoc()){
    $pdf->Cell(10,5,$fila['id_dept'], 1, 0, 'C', 0);    
    $pdf->Cell(40,5,utf8_decode($fila['nombre']), 1, 0, 'C', 0);    
    $pdf->Cell(60,5,$fila['fecha_creacion'], 1, 0, 'C', 0);  
    $act = ($fila['estado'] == 1) ? "Activo" : "Inactivo";
    $pdf->Cell(60,5,$fila['fecha_modificacion'], 1, 0, 'C', 0);    
    $pdf->Cell(25,5,$act,1,1, 'C', 0);    
    }
$pdf->Output();
?>