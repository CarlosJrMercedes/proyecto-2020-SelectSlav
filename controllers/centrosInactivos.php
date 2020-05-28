<?php
    require "../models/CentroVModel.php";
    $centroModel = new CentroVModel();
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

   if(isset($_POST['activar']) != null){
    if($_POST['activar'] == "yes"){
        $centroModel->actiCentro($_POST["idUsu"]);
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
<input type="text" id="activarUsu" readonly hidden>
<table class="table table-ligt" id="tblUsuInact">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Municipio</th>
                        <th>Direccion</th>
                        <th>CREACIÓN</th>
                        <th>MODIFICACIÓN</th>
                        <th>ESTADO</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $datos = $centroModel->getAllCentroVInact();
                        foreach($datos as $d):
                            $id = $d->getId_centro();
                            $nombreComp = $d->getNombre();
                            $muicipio = $d->getId_munici();
                            $direccion = $d->getDireccion();
                            $creacion = $d->getFecha_creacion();
                            $modificacion = $d->getFecha_modificacion();
                            $estado = $d->getEstado();
                        ?>
                        <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $nombreComp;?></td>
                        <td><?php echo $muicipio;?></td>
                        <td><?php echo $direccion;?></td>
                        <td><?php echo $creacion;?></td>
                        <td><?php echo $modificacion;?></td>
                        <td><?php if($estado == 1){echo "Activo";} ?></td>
                        <td>
                        <button class="btn btn-outline-secondary btn-lg" 
                            onclick="$('#activarUsu').val('<?php echo $id?>');habilitarCentro();">
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