<?php

    require "../models/CentroVModel.php";

    $objCentoV = new CentroVModel();
    $muni = $objCentoV->getAllMuni();
    $centros = $objCentoV->getAllCentroV();


    require_once "../views/centroVotacion.php";
?>