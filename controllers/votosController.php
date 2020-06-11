
<?php
      require "../models/VotosModel.php";
      $objVotos = new VotosModel();
      $datos = $objVotos->getAllVotos();
      $sql = $objVotos->getAllPartidos();
      $votos = $objVotos->getVotos();




    require_once "../views/votos.php";
?>