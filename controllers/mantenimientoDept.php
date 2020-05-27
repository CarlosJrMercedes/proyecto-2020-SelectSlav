<?php

    require "../models/DepartamentoModel.php";


    $deptModel = new DepartamentoModel();
    

    $accion=$_POST["accion"];
  
    switch($accion):
        case "I":
            $error = $deptModel->insertDept($_POST["nombrese"]);
            echo $error;
        break;
        case "M":
            $error = $deptModel->modDept($_POST["nombrese"],$_POST["id"]);
            echo $error;
        break;
        case "E":
            $error = $deptModel->eleDept($_POST["id"]);
            echo $error;
        break;
        case "D":
            $error = $deptModel->desaDept($_POST["id"]);
            echo $error;
        break;
    endswitch;

?>