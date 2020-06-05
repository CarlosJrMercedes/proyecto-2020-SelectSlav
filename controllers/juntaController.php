
<?php
require "../models/juntaReceptoraModel.php";
$objJuntaReceptora = new juntaReceptoraModel();
$datos = $objJuntaReceptora->getAllJunta();
$sql = $objJuntaReceptora->getAllCentro();
require_once "../views/juntaReceptora.php";
?>