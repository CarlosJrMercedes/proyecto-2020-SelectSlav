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
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #313e48;">
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
        </nav>
    </header>
   <div class="clarfix"></div>
    <div class="container" style="padding-bottom:5%;padding-top:5%">
    <div class="">
        <p><h3>Gestión de Usuarios</h3></p>
    </div>
        <div class="form-row" id="formMantenimiento">
            <div class="col-md-6">
                <label for="">Nombre completo :</label>
                <input type="text" class="form-control" placeholder="Nombre completo" id="nombre">
                <input type="text" id="id" hidden readonly>
            </div>
            <div class="col-md-6">
                <label for="">Rol :</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="0" selected>SELECCIONE</option>
                    <?php
                        foreach($roles as $r):
                    ?>
                        <option value="<?php echo $r->getId_rol(); ?>"><?php echo $r->getRol(); ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
                <br>
                <label for="">Usuario :</label>
                <input type="text" class="form-control" placeholder="Usuario" id="usuario">
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Contraseña :</label>
                <input type="password" class="form-control" placeholder="contraseña" id="contra">
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
        <div id="tblActivos">
            <button id="verInactivos" class="btn btn-outline-dark btn-sm" >Ver Usuarios Inactivos</button>
            <table class="table table-ligt" id="tblUsu" style="text-align:center;">
                <thead class="thead-dark">
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
                        <th><?php echo $id;?></th>
                        <td><?php echo $nombreComp;?></td>
                        <td><?php echo $rol;?></td>
                        <td><?php echo $usuario;?></td>
                        <td><?php echo $creacion;?></td>
                        <td><?php echo $modificacion;?></td>
                        <td><?php if($estado == 1){echo "Activo";} ?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-lg" 
                            onclick="habilitarBtn();$('#rol').val('<?php echo $rol?>');
                                    $('#nombre').val('<?php echo $nombreComp?>');
                                    $('#id').val('<?php echo $id?>');
                                    $('#usuario').val('<?php echo $usuario?>');">
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
        <div id="tblInac">
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
    <script src="../views/resources/js/usuarios.js"></script>
</html>
