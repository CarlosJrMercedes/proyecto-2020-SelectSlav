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
            
        </nav>
</header>
<div class="clarfix"></div>
    <div class="container" style="padding-bottom:5%;padding-top:2%">
    <div class="">
        <p><h3>Gestión de Departamentos</h3></p>
    </div>
        <div class="form-row" id="formdept">
        <div class="">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="ID" id="id" name="id" hidden readonly>
                <label for="">Nombre departamento :</label>
                <input type="text" class="form-control" placeholder="Ingresar" name="nombrese" id="nombrese">
                
            </div>
            
            <div class="col-md-12">
                <br>
                <button id="ingDept" class="btn btn-outline-secondary btn-lg">Ingresar</button>
                <button id="modDept" class="btn btn-outline-success btn-lg" hidden>Modificar</button>
                <button id="eliDept" class="btn btn-outline-danger btn-lg" hidden>Eliminar</button>
                <button id="desactDept" class="btn btn-outline-info btn-lg" hidden>Desactivar</button>
                <button id="cancelDept" class="btn btn-outline-primary btn-lg" >Cancelar</button>
            </div>
        </div>
        <br>
        <br>
        <button id="regresar" class="btn btn-outline-warning btn-lg" hidden>Regresar</button>
        <div id="tblActivos">
        
        <form action="../controllers/reporteDepartamento.php" method="POST" target="_blank">
        <div class="col-md-6">
        <input type="submit" class="btn btn-outline-dark btn-sm" value="Generar reporte departamento">
        
        </form
   <br>
   <br>

   </div>
        <br>
        <div class="col-md-6">
        <button id="verInactivos" class="btn btn-outline-dark btn-sm" >Ver Departamentos Inactivos</button>
        </div>
            <table class="table table-ligt" id="tblDept" style="text-align:center;">
            <thead Style="background-color:#313e48;color:#ffffff;">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CREACIÓN</th>
                    <th>MODIFICACIÓN</th>
                    <th>ESTADO</th>
                    <th>ACCIÓN</th>
                </tr>
            </thead>
            </tbody>
                <?php

                    foreach($datos as $d):
                        $idDept = $d->getId_dept();
                        $nombre = $d->getNombre();
                        $creacion = $d->getFecha_creacion();
                        $modificacion = $d->getFecha_modificacion();
                        $estado = $d->getEstado();
                ?>
                <tr>
                    <th><?php echo $idDept;?></th>
                    <td><?php echo $nombre;?></td>
                    <td><?php echo $creacion;?></td>
                    <td><?php echo $modificacion;?></td>
                    <td><?php if($estado == 1){echo "Activo";}?></td>
                    <td>
                        <button class="btn btn-outline-secondary btn-lg" 
                        onclick="habilitarBtn();
                         $('#nombrese').val('<?php echo $nombre?>');
                        $('#id').val('<?php echo $idDept?>');">
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
    <script src="../views/resources/js/departamentos.js"></script>
</html>