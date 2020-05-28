<?php
 
    require "../models/CentroVModel.php";

    $centroModel = new CentroVModel();

    $accion=$_POST["accion"];

    switch($accion):
        case "I":
            $error = $centroModel->insertCentroV($_POST["nombre"],$_POST["id_munici"],$_POST["direccion"]);
            echo $error;
        break;
        case "M":
            $error = $centroModel->modCentroV($_POST["id_centro"],$_POST["nombre"],$_POST["id_munici"],$_POST["direccion"]);
            echo $error;
        break;
        case "E":
            $error = $centroModel->eleCentroV($_POST["id_centro"]);
            echo $error;
        break;
        case "D":
            $error = $centroModel->desaCentro($_POST["id_centro"]);
            echo $error;
        break;
    endswitch;

?>