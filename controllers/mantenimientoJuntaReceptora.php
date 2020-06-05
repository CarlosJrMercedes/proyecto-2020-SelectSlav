<?php
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

    require "../models/juntaReceptoraModel.php";


    $juntaModel = new juntaReceptoraModel();
    

    $accion=$_POST["accion"];
  
    switch($accion):
        case "I":
            $error = $juntaModel->insertJunta($_POST["nombre"],$_POST["centro"]);
            echo $error;
        break;
        case "M":
            $error = $juntaModel->updaJunta($_POST["nombre"],$_POST["centro"],$_POST["id_Junta"]);
            echo $error;
        break;
        case "E":
            $error = $juntaModel->delJunta($_POST["id_Junta"]);
            echo $error;
        break;
        case "D":
            $error = $juntaModel->desactivarJunta($_POST["id_Junta"]);
            echo $error;
        break;
    endswitch;

?>