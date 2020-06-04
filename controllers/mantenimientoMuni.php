<?php
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

    require "../models/MunicipioModel.php";


    $municiModel = new MunicipioModel();
    

    $accion=$_POST["accion"];
  
    switch($accion):
        case "I":
            $error = $municiModel->insertMunici($_POST["nombre"],$_POST["dept"]);
            echo $error;
        break;
        case "M":
            $error = $municiModel->modifyMunici($_POST["nombre"],$_POST["dept"],$_POST["idMuni"]);
            echo $error;
        break;
        case "E":
            $error = $municiModel->deleteMunici($_POST["idMuni"]);
            echo $error;
        break;
        case "D":
            $error = $municiModel->desactivarMunici($_POST["idMuni"]);
            echo $error;
        break;
    endswitch;

?>