<?php
    require "../models/MunicipioModel.php";
    $objMunicipio = new MunicipioModel();
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

   if(isset($_POST['activar']) != null){
    if($_POST['activar'] == "yes"){
        $objMunicipio->activarMunici($_POST["id"]);
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
<input type="text" id="activarMunici" readonly hidden>
<table class="table table-ligt" id="tblMuniciInact" style="text-align:center;">
                <thead Style="background-color:#313e48;color:#ffffff;">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE </th>
                        <th>DEPARTAMENTO</th>
                        <th>CREACIÓN</th>
                        <th>MODIFICACIÓN</th>
                        <th>ESTADO</th>
                        <th>ACCIÓN</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php
                        $datos = $objMunicipio->getAllMuniciInactivos();
                        foreach($datos as $data):
                            $id_munici = $data->getId_munici();
                            $nombre = $data->getNombre();
                            $dept = $data->getId_dept();
                            $creacion = $data->getFecha_creacion();
                            $modificacion = $data->getFecha_modificacion();
                            $estado = $data->getEstado();
                        ?>
                        <tr>
                        <td><?php echo $id_munici;?></td>
                        <td><?php echo $nombre;?></td>
                        <td><?php echo $dept;?></td>
                        <td><?php echo $creacion;?></td>
                        <td><?php echo $modificacion;?></td>
                        <td><?php if($estado == 2){echo "Inactivo";}?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-lg" 
                            onclick="$('#activarMunici').val('<?php echo $id_munici?>');habilitarMunici();">
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
    $("#tblMuniciInact").DataTable();
});
</script>
</html>