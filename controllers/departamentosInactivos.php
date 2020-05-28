<?php
    require "../models/DepartamentoModel.php";
    $objDepartamento = new DepartamentoModel();
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

   if(isset($_POST['activar']) != null){
    if($_POST['activar'] == "yes"){
        $objDepartamento->activarDept($_POST["id"]);
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
<input type="text" id="activarDept" readonly hidden>
<table class="table table-ligt" id="tblDeptInact" style="text-align:center;">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CREACIÓN</th>
                    <th>MODIFICACIÓN</th>
                    <th>ESTADO</th>
                    <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $datos = $objDepartamento->getAllDeptInactivos();
                        foreach($datos as $d):
                            $idDept = $d->getId_dept();
                            $nombre = $d->getNombre();
                            $creacion = $d->getFecha_creacion();
                            $modificacion = $d->getFecha_modificacion();
                            $estado = $d->getEstado();
                    ?>
                    <tr>
                    <td><?php echo $idDept;?></td>
                    <td><?php echo $nombre;?></td>
                    <td><?php echo $creacion;?></td>
                    <td><?php echo $modificacion;?></td>
                    <td><?php if($estado == 2){echo "Inactivo";}?></td>
                    <td>
                        <button class="btn btn-outline-secondary btn-lg" 
                        onclick="$('#activarDept').val ('<?php echo $idDept?>');habilitarDept();">
                            ACTIVAR
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
    $("#tblDeptInact").DataTable();
});
</script>
</html>