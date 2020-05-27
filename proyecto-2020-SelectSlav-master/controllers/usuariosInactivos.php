<?php
    require "../models/UsuarioModel.php";
    $objUsuarios = new UsuarioModel();
    session_start();
    if($_SESSION["nombre"] != null ){
 
    }
    else{
        header("Location: indexController.php");
    }

   if(isset($_POST['activar']) != null){
    if($_POST['activar'] == "yes"){
        $objUsuarios->actiUsu($_POST["idUsu"]);
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
<table class="table table-ligt" id="tblUsuInact" style="text-align:center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>ROL</th>
                        <th>USUARIO</th>
                        <th>CREACIÓN</th>
                        <th>MODIFICACIÓN</th>
                        <th>ESTADO</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $datos = $objUsuarios->getAllUsersInact();
                        foreach($datos as $d):
                            $id = $d->getId_usuario();
                            $nombreComp = $d->getNombre_completo();
                            $rol = $d->getId_rol();
                            $usuario = $d->getUsuario();
                            $creacion = $d->getFecha_creacion();
                            $modificacion = $d->getFecha_modificacion();
                            $estado = $d->getEstado();
                    ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $nombreComp;?></td>
                        <td><?php echo $rol;?></td>
                        <td><?php echo $usuario;?></td>
                        <td><?php echo $creacion;?></td>
                        <td><?php echo $modificacion;?></td>
                        <td><?php if($estado == 2){echo "Inactivo";} ?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-lg" 
                            onclick="$('#activarUsu').val('<?php echo $id?>');habilitarUsu();">
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