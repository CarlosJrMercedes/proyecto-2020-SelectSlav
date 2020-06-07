<?php
    require "../models/MunicipioModel.php";
    $obj1= new MunicipioModel();
    
    $selectDept = $obj1->getAllDept();
    $images = $obj1->getAllImg();
    require_once "../views/index.php";
    

?>