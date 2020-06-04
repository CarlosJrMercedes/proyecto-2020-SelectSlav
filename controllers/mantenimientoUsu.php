<?php
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }
    
    require "../models/UsuarioModel.php";


    $usuModel = new UsuarioModel();
    

    $accion=$_POST["accion"];

    switch($accion):
        case "I":
            $error = $usuModel->insertUsu($_POST["nombre"],$_POST["rol"],$_POST["usu"],$_POST["contra"]);
            echo $error;
        break;
        case "M":
            $error = $usuModel->modUsu($_POST["nombre"],$_POST["rol"],$_POST["usu"],$_POST["contra"],$_POST["idUsu"]);
            echo $error;
        break;
        case "E":
            $error = $usuModel->eleUsu($_POST["idUsu"]);
            echo $error;
        break;
        case "D":
            $error = $usuModel->desaUsu($_POST["idUsu"]);
            echo $error;
        break;
    endswitch;

?>