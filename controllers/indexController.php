<?php
    require "../models/MunicipioModel.php";
    // $objIndex = new IndexModel();
    $obj1= new MunicipioModel();
    $images = $obj1->getAllImg();
    $selectDept = $obj1->getAllDept();
    $data = $obj1->graficas();
    $totalVotos = $obj1->totalVotos();
    $partido = "";
    $votos = "";
    $tVotos=0;


  foreach($totalVotos as $tV):
    $tVotos= $tV["totalVotos"];
  endforeach;
  echo $tVotos;


    foreach($data as $d):
        $partido.= "'".$d["nombre_partido"]."',";
        $votos.= $d["votos"].",";
    endforeach;

    
  require_once "../views/index.php";
    

?>