<?php

    session_start();
    if($_SESSION["nombre"] != null ){

    }
    else{
        header("Location: indexController.php");
    }

    require "../models/PartidoModel.php";
    $partidoModel = new PartidoModel();

    $accion = $_POST["accion"];
    switch ($accion) {
        case 'I':
                $nombrePartido = $_POST["nomPartido"];
                $nombreCamdi = $_POST["nomCandi"];
                $bandera = $_FILES["bandera"]["name"];
                $candidato = $_FILES["candidato"]["name"];
                $ruta = "img/";
                if(move_uploaded_file($_FILES["bandera"]["tmp_name"],$ruta.$bandera) &&
                    move_uploaded_file($_FILES["candidato"]["tmp_name"],$ruta.$candidato)){

                    $proc = $partidoModel->insertPartido($nombrePartido,$nombreCamdi,
                    $ruta.$bandera,$ruta.$candidato);
                echo $proc;
                }else{
                    echo "2";    
                }
        break;
        case 'M1':
                $nombrePartido = $_POST["nomPartido"];
                $nombreCamdi = $_POST["nomCandi"];
                $idPart = $_POST["idPart"];
                $bandera = $_FILES["bandera"]["name"];
                $candidato = $_FILES["candidato"]["name"];
                $ruta = "img/";
                if(move_uploaded_file($_FILES["bandera"]["tmp_name"],$ruta.$bandera) &&
                    move_uploaded_file($_FILES["candidato"]["tmp_name"],$ruta.$candidato)){

                    $proc = $partidoModel->mod1Partido($nombrePartido,$nombreCamdi,
                    $ruta.$bandera,$ruta.$candidato,$idPart);
                    echo $proc;
                }else{
                    echo "2";    
                }
        break;
        case 'M2':
                $nombrePartido = $_POST["nomPartido"];
                $nombreCamdi = $_POST["nomCandi"];
                $idPart = $_POST["idPart"];
                $proc = $partidoModel->mod2Partido($nombrePartido,$nombreCamdi,$idPart);
                echo $proc;
        break;    
        case 'E':
                $idPart = $_POST["idPart"];
                $proc = $partidoModel->dropPartido($idPart);
                echo $proc;
        break;  
        case 'D':
                $idPart = $_POST["idPart"];
                $proc = $partidoModel->desacPartido($idPart);
                echo $proc;
        break; 
    }



?>