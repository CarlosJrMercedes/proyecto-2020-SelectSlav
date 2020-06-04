<?php
    require "../models/PartidoModel.php";
    $partidoModel = new PartidoModel();
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

   if(isset($_POST['activar']) != null){
    if($_POST['activar'] == "yes"){
        $partidoModel->actiPartido($_POST["idParti"]);
    }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <input type="text" id="activarPart" readonly hidden>
    <table class="table table-ligt" id="tblUsuInact" style="text-align:center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Partido</th>
                <th>Nombre Candidato</th>
                <th>Bandera</th>
                <th>Candidato</th>
                <th>Creaciópn</th>
                <th>Modificacion</th>
                <th>Estado</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $datos = $partidoModel->getAllPartidosInact();
                foreach($datos as $d):
                    $id = $d->getId_partido();
                    $nombrePart = $d->getNombrePartido();
                    $nombreCand = $d->getNombreCandidato();
                    $bandera = $d->getFotoBanderaPartido();
                    $candidato = $d->getFotoCandidato();
                    $creacion = $d->getFechaCreacion();
                    $modificacion = $d->getFechaModificacion();
                    $estado = $d->getEstado();
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $nombrePart;?></td>
                <td><?php echo $nombreCand;?></td>
                <td>
                    <img src="<?php echo $bandera;?>" style="width: 100%;height:50px" class="rounded mx-auto d-block">
                </td>
                <td>
                    <img src="<?php echo $candidato;?>" style="width: 100%;height:50px" class="rounded mx-auto d-block">
                </td>
                <td><?php echo $creacion;?></td>
                <td><?php echo $modificacion;?></td>
                <td><?php if($estado == 2){echo "Inactivo";} ?></td>
                <td>
                    <button class="btn btn-outline-secondary btn-lg" 
                    onclick="$('#activarPart').val('<?php echo $id?>');habilitarPart();">
                        Activar
                    </button>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</body>
<script>
$(document).ready(function(){
    $("#tblUsuInact").DataTable();
});
</script>
</html>