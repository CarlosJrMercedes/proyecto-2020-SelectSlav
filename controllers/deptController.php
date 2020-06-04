<?php

    require "../models/DepartamentoModel.php";

    $objDepartamento = new DepartamentoModel();
    $datos = $objDepartamento->getAllDept();

    require_once "../views/departamentos.php";
?>