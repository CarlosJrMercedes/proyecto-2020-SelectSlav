<?php

require('../fpdf/fpdf.php');
//require('../views/votos.php');
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
    $this->Cell(150,10,'Reporte de Votos',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    
    $this->Cell(10,10,'ID', 1, 0, 'C', 0);    
    $this->Cell(30,10,'DUI', 1, 0, 'C', 0);    
    $this->Cell(35,10,'Municipio', 1, 0, 'C', 0);    
    $this->Cell(35,10,'Junta Receptora', 1, 0, 'C', 0);    
    $this->Cell(40,10,'Partido', 1, 0, 'C', 0);    
    $this->Cell(40,10,utf8_decode('Fecha creación'), 1, 0, 'C', 0);    
    $this->Cell(40,10,utf8_decode('Fecha modificación'), 1, 0, 'C', 0);    
    $this->Cell(20,10,'Estado',1,0, 'C', 0);   
    $this->Cell(20,10,'Voto No.',1,1, 'C', 0);   
    
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

if(isset($_POST['idPartido'])){
    
   $po = $_POST['idPartido'];
   
//var_dump($po);
//die();

    require('cx.php');
$consulta = "SELECT v.*,
m.nombre AS nombreMun,
jr.nombre AS nombreJunta,
p.nombre_partido as nombrePar 
FROM votos AS v 
INNER JOIN municipios AS m ON m.id_munici = v.id_munici
INNER JOIN junta_receptora AS jr ON jr.id_junta = v.id_junta
INNER JOIN partido_politico AS p ON p.id_partido = v.id_partido
WHERE p.id_partido=".$po."";
$cositas = $mysqli->query($consulta);
}
//var_dump($cositas);
//die();





$pdf = new PDF('L');
$pdf->AddPage();
$pdf->aliasNbPages();
$pdf->SetFont('Arial','',10);
$i=0;
while($fila = $cositas->fetch_assoc()){
    $i = $i+1;
    $pdf->Cell(10,5,$fila['id_voto'], 1, 0, 'C', 0);    
    $pdf->Cell(30,5,$fila['dui_votante'], 1, 0, 'C', 0);    
    $pdf->Cell(35,5,$fila['nombreMun'], 1, 0, 'C', 0);  
    $act = ($fila['estado'] == 1) ? "Activo" : "Inactivo";
    $pdf->Cell(35,5,utf8_decode($fila['nombreJunta']), 1, 0, 'C', 0);  
    $pdf->Cell(40,5,utf8_decode($fila['nombrePar']), 1, 0, 'C', 0);  
    $pdf->Cell(40,5,$fila['fecha_creacion'], 1, 0, 'C', 0);    
    $pdf->Cell(40,5,$fila['fecha_modificacion'], 1, 0, 'C', 0);    
    $pdf->Cell(20,5,$act,1,0, 'C', 0);    
    $pdf->Cell(20,5,$i,1,1, 'C', 0);    
}   

$pdf->Output();
?>