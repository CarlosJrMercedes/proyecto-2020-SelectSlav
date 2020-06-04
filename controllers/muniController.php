
<?php
    
    require "../models/MunicipioModel.php";
    $objMunicipio = new MunicipioModel();
    $datos = $objMunicipio->getAllMunici();
    $sql = $objMunicipio->getAllDept();
    require_once "../views/municipios.php";
?>