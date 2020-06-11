<?php


require "../models/votosModel.php"; 
    $voModel = new VotosModel();
    if(isset($_POST["desactivar"]) != null){

        $idVoto = $_POST["idVoto"];
        $resp = $voModel->desaVoto($idVoto);
        if($resp == 1){
            echo "1";
        }else{
            echo "2";
        }
    }



?>