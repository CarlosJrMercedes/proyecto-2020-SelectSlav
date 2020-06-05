<?php
    require "../models/juntaReceptoraModel.php";
    $juntas = new juntaReceptoraModel();
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

   if(isset($_POST['activar']) != null){
    if($_POST['activar'] == "yes"){
        $juntas->habilitarJunta($_POST["id_Junta"]);
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
<input type="text" id="habilitarJunta" readonly hidden>
<table class="table table-ligt" id="tblJuntasInact" style="text-align:center;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CENTRO</th>
                    <th>CREACION</th>
                    <th>MODIFICACIÓN</th>
                    <th>ESTADO</th>
                    <th>ACCIÓN</th>
                </tr>
                <?php
                    $datos = $juntas->getAllJuntasInac();
                    foreach($datos as $d):
                        $id_Junta = $d->getId_junta();
                        $nombre = $d->getNombre();
                        $centro = $d->getId_centro();
                        $cNombre = $d->getcNombre();
                        $creacion = $d->getFecha_creacion();
                        $modificacion = $d->getFecha_modificacion();
                        $estado = $d->getEstado();
                ?>
                <tr>
                    <td><?php echo $id_Junta;?></td>
                    <td><?php echo $nombre;?></td>
                    
                    <td><?php echo $cNombre;?></td>
                    <td><?php echo $creacion;?></td>
                    <td><?php echo $modificacion;?></td>
                    <td><?php if($estado == 2){echo "Inactivo";}?></td>
                    <td>
                    <button class="btn btn-outline-secondary btn-lg" 
                            onclick="$('#habilitarJunta').val('<?php echo $id_Junta?>');habilitarJunta();">
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
    $("#tblJuntasInact").DataTable();
});
</script>
</html>