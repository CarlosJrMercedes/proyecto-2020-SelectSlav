
<?php
    
    require "../models/PartidoModel.php";
    $pp = new PartidoModel();

    $data = $pp->getAllPartidos();


    require_once "../views/partidos.php";

?>