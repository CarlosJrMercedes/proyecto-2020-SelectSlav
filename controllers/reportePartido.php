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
    $this->Cell(90);
    // Título
    $this->Cell(80,10,'Reporte de Partidos politicos',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    
    $this->Cell(7,10,'ID', 1, 0, 'C', 0);    
    $this->Cell(42,10,'Nombre Partido', 1, 0, 'C', 0);    
    $this->Cell(42,10,'Nombre candidato', 1, 0, 'C', 0);    
    $this->Cell(44,10,'Bandera Partido', 1, 0, 'C', 0);   
    $this->Cell(44,10,'Bandera Candidato', 1, 0, 'C', 0);     
    $this->Cell(42,10,utf8_decode('Fecha creación'), 1, 0, 'C', 0);    
    $this->Cell(42,10,utf8_decode('Fecha modificación'), 1, 0, 'C', 0);    
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
$consulta = "SELECT * FROM partido_politico";
$cositas = $mysqli->query($consulta);

//$cositas = mysql_query("SELECT * FROM partido_politico");


$pdf = new PDF('L', 'mm');
$pdf->AddPage();
$pdf->aliasNbPages();
$pdf->SetFont('Arial','',10);
while($fila = $cositas->fetch_assoc()){
//while($fila = mysql_fetch_array($cositas))
    $imagen = $fila['foto_bandera_partido'];
    $imagen1 = $fila['foto_candidato'];
    $pdf->Cell(7,44,$fila['id_partido'], 1, 0, 'C', 0);    
    $pdf->Cell(42,44,$fila['nombre_partido'], 1, 0, 'C', 0);    
    $pdf->Cell(42,44,$fila['nombre_candidato'], 1, 0, 'C', 0);  
    $act = ($fila['estado'] == 1) ? "Activo" : "Inactivo";
    
    //$ext = explode('.',$imagen);
    $pdf->Cell (44,44,$pdf->Image($imagen,$pdf->GetX()+2, $pdf->GetY()+2, 40),1);    
    //$pdf->Image($imagen,102,42,40,40,strtoupper($ext[1]));
    

      
    //  $ext = explode('.',$imagen1);
    $pdf->Cell (44,44,$pdf->Image($imagen1,$pdf->GetX()+2, $pdf->GetY()+2,40),1);    
    $pdf->Cell(42,44,$fila['fecha_creacion'], 1, 0, 'C', 0);    
    $pdf->Cell(42,44,$fila['fecha_modificacion'], 1, 0, 'C', 0);    
    $pdf->Cell(20,44,$act,1,1, 'C', 0);    
    }
$pdf->Output();
?>