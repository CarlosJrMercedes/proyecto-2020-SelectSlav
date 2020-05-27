<?php
    require "../models/UsuarioModel.php";
    $usu = $_POST["usuario"];
    $contra = $_POST["contra"];


    $uModel = new UsuarioModel();
    $res = $uModel->validarUsu($usu,$contra);


    if($res != 0){
        session_start();
        $_SESSION["nombre"] = $usu;
        echo "h";
    }else{
        echo"g";
    }



?>