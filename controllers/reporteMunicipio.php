<?php

require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','',12);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'Reporte de Municipios',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    
    $this->Cell(10,10,'ID', 1, 0, 'C', 0);    
    $this->Cell(55,10,'Nombre', 1, 0, 'C', 0);    
    $this->Cell(35,10,'Departamento', 1, 0, 'C', 0);    
    $this->Cell(35,10,utf8_decode('Fecha creación'), 1, 0, 'C', 0);    
    $this->Cell(40,10,utf8_decode('Fecha modificación'), 1, 0, 'C', 0);    
    $this->Cell(20,10,'Estado',1,1, 'C', 0);   
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
$consulta = "SELECT m.*,d.nombre as nombreDept,d.id_dept FROM municipios m INNER JOIN departamentos d ON m.id_dept = d.id_dept";
$cositas = $mysqli->query($consulta);


$pdf = new PDF();
$pdf->AddPage();
$pdf->aliasNbPages();
$pdf->SetFont('Arial','',10);
while($fila = $cositas->fetch_assoc()){
    $pdf->Cell(10,5,$fila['id_munici'], 1, 0, 'C', 0);    
    $pdf->Cell(55,5,utf8_decode($fila['nombre']), 1, 0, 'C', 0);    
    $pdf->Cell(35,5,utf8_decode($fila['nombreDept']), 1, 0, 'C', 0);  
    $act = ($fila['estado'] == 1) ? "Activo" : "Inactivo";
    $pdf->Cell(35,5,$fila['fecha_creacion'], 1, 0, 'C', 0);    
    $pdf->Cell(40,5,$fila['fecha_modificacion'], 1, 0, 'C', 0);    
    $pdf->Cell(20,5,$act,1,1, 'C', 0);    
    }
$pdf->Output();
?>