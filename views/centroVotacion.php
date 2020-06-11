<?php
   session_start();
   if($_SESSION["nombre"] != null ){

   }
   else{
       header("Location: indexController.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SelectSalv S.A de C.V</title>
    <link rel="icon" type="image/jpg" href="../views/resources/img/logotipo.png">
    <link rel="stylesheet" href="../views/resources/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/resources/src/css/select2.css">
    <link href="../views/resources/src/css/bootstrap.css">
    <link href="../views/resources/src/css/dataTables.bootstrap4.min.css">
    <link href="../views/resources/src/css/responsive.bootstrap4.min.css">
    <link href="../views/resources/css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #313e48;">
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="navbar-nav mr-auto">
                    <img src="../views/resources/img/logotipo.png" width="100px" heigth="100px" class="rounded float-left">
                </div>
                <div class="navbar-nav m-auto">
                    
                    <a class="btn btn-outline-light" href="centroVController.php">Centros de Votación</a>&nbsp;
                    <a class="btn btn-outline-light" href="deptController.php">Departamentos</a>&nbsp;
                    <a class="btn btn-outline-light" href="muniController.php">Municipios</a>&nbsp;
                    <a class="btn btn-outline-light" href="juntaController.php">Juntas Receptoras</a>&nbsp;
                    <a class="btn btn-outline-light" href="partidoController.php">Partido Político</a>&nbsp;
                    <a class="btn btn-outline-light" href="usuarioController.php">Usuarios</a>&nbsp;
                    <a class="btn btn-outline-light" href="votosController.php">Votos</a>
                        
                </div>
                <div class="btn-group dropleft mb-3 form-inline my-2 my-lg-0 ml-auto">
                    <button aria-haspopup="true" aria-expanded="true" 
                    class="btn btn-outline-light  dropdown-toggle my-2 my-sm-0 btn-lg" 
                    id="dropdownMenuEnlace2" data-toggle="dropdown" type="button">
                        <i class="far fa-user fa-lg"></i>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuEnlace2">
                        <button class="dropdown-item" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="@nombreDeUsuario"
                         id="closeSesion">Cerrar sesion</button>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Salir</a>
                    </div>   

                </div>
            <!-- </div> -->
        </nav>
</header>
    <div class="container" style="padding-botton:5%;">

        <div class="" id="">
        <div class="form-row" style="padding-top:2%;" id="formMantenimiento">
        <div class="col-md-12">
            <p><h3>Gestión de Centros de Votación</h3></p>
        </div>
        <div class="clearfix"></div>
            <div class="col-md-4">
                <label for="">Nombre :</label>
                <input type="text" id="id" hidden readonly>
                <input type="text" class="form-control" placeholder="Nombre" id="nombre">
            </div>

            <div class="col-md-4">
            <label for="">Municipio :</label>
                <select name="muni" id="muni" class="form-control">
                    <option value="0" selected>SELECCIONE</option>
                    <?php
                        foreach($muni as $r):
                    ?>
                        <option value="<?php echo $r["id_munici"]; ?>"><?php echo $r["nombre"]; ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>

            <div class="col-md-4">
                <label for="">Direccion:</label>
                <input type="text" class="form-control" placeholder="Direccion" id="direccion">
            </div>

            <div class="col-md-12">
                <br>
                <button id="ingUsu" class="btn btn-outline-secondary btn-lg">Ingresar</button>
                <button id="modUsu" class="btn btn-outline-success btn-lg" hidden>Modificar</button>
                <button id="eliUsu" class="btn btn-outline-danger btn-lg" hidden>Eliminar</button>
                <button id="desactUsu" class="btn btn-outline-info btn-lg" hidden>Desactivar</button>
                <button id="cancelUsu" class="btn btn-outline-primary btn-lg" >Cancelar</button>
            </div>
        </div>
        <br>
        <br>
        <br>
        <button id="regresar" class="btn btn-outline-warning btn-lg" hidden>Regresar</button>
        <div id="tablaData">
        <button id="verInactivos" class="btn btn-outline-dark btn-sm" >Ver Inactivos</button>
            <table class="table table-ligt" id="tblCentroV">
                <thead Style="background-color:#313e48;color:#ffffff;">
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
                        foreach($centros as $d):
                            $id = $d["id_centro"];
                            $nombreComp = $d["nombre"];
                            $muicipio = $d["id_munici"];
                            $nombreMuni = $d["noombreMuni"];
                            $direccion = $d["direccion"];
                            $creacion = $d["fecha_creacion"];
                            $modificacion = $d["fecha_modificacion"];
                            $estado = $d["estado"];
                        ?>
                        <tr>
                        <th><?php echo $id;?></th>
                        <td><?php echo $nombreComp;?></td>
                        <td><?php echo $nombreMuni;?></td>
                        <td><?php echo $direccion;?></td>
                        <td><?php echo $creacion;?></td>
                        <td><?php echo $modificacion;?></td>
                        <td><?php if($estado == 1){echo "Activo";} ?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-lg" 
                            onclick="habilitarBtn();$('#muni').val('<?php echo $muicipio?>');
                                    $('#nombre').val('<?php echo $nombreComp?>');
                                    $('#id').val('<?php echo $id?>');
                                    $('#direccion').val('<?php echo $direccion?>');">
                                EDITAR
                            </button>
                        </td>
                        </tr>
                        <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div id="tabalInactivoa">
                        
        </div>
        </div>
    </div>
</body>
<!-- Footer -->
<footer class="page-footer font-small" style="background-color:#313e48;position: static;bottom: 0;width: 100%;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><font color="#ffffff">© 2020 Copyright:</font>
    <a href="#"> SelectSalv S.A de C.V</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <script src="../views/resources/src/js/popper.min.js"></script>
    <script src="../views/resources/src/js/jquery.min.js"></script>
    <script src="../views/resources/src/js/bootstrap.min.js"></script>
    <script src="../views/resources/src/js/messageboxes.js"></script>
    <script src="../views/resources/src/js/notifications.js"></script>
    <script src="../views/resources/src/js/select2.js"></script>
    <script src="../views/resources/src/js/jquery.dataTables.min.js"></script>
    <script src="../views/resources/src/js/dataTables.bootstrap4.min.js"></script>
    <script src="../views/resources/src/js/dataTables.responsive.min.js"></script>
    <script src="../views/resources/src/js/responsive.bootstrap4.min.js"></script>
    <script src="../views/resources/src/js/sweetalert2.all.min.js"></script>
    <script src="../views/resources/src/js/fontAweson.js"></script>
    <script src="../views/resources/js/deslogueo.js"></script>
    <script src="../views/resources/js/centroV.js"></script>
</html>