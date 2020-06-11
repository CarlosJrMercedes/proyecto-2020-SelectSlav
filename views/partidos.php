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
    <div class="container">
        <div class="" id="contenedor">
            <div class="">
                <p><h3>Gestión de Partidos</h3></p>
                
            </div>
            <form id="formPart" enctype="multipart/form-data">
                <p id="textoC" hidden class="p-2 bg-danger bg-outline text-white">
                    Edición Completa.
                </p>
                <p id="textoB" hidden class="p-2 bg-success bg-outline text-white">
                    Edición Básica.
                </p>
                <div class="form-row" id="formMantenimiento">
                    <div class="col-md-6">
                        <label for="">Nombre partido :</label>
                        <input type="text" class="form-control" placeholder="Partido" 
                        id="nomPartido" require>
                        <input type="text" id="idPartido" hidden readonly>
                        <input type="text" id="completo" hidden readonly>
                        <input type="text" id="fotoB" hidden readonly>
                        <input type="text" id="fotoC" hidden readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="">Nombre Candidato :</label>
                        <input type="text" class="form-control" placeholder="Candidato" 
                        id="nomCandi" require>
                    </div>
                    <div class="col-md-6" id="seccionB">
                        <br>
                        <label for="">Foto Bandera :</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="bandera"
                                aria-describedby="inputGroupFileAddon01" name="bandera" require>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6" id="seccionC">
                        <br>
                        <label for="">Foto Candidato :</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="candidato"
                                aria-describedby="inputGroupFileAddon01" require>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <br>
                        <button id="ingPart" class="btn btn-outline-secondary btn-lg" type="button">Ingresar</button>
                        <button id="modPart" class="btn btn-outline-success btn-lg" type="button" hidden>Modificar</button>
                        <button id="eliPart" class="btn btn-outline-danger btn-lg" type="button" hidden>Eliminar</button>
                        <button id="desactPart" class="btn btn-outline-info btn-lg" type="button" hidden>Desactivar</button>
                        <button id="cancelPart" class="btn btn-outline-primary btn-lg" type="button" >Cancelar</button>
                    </div>

                </div>
            </form>
            <br>
            <br>
            
        </div>
        <button id="regresar" class="btn btn-outline-warning btn-lg" hidden>Regresar</button>
        <div id="activos" style="">
        <form action="../controllers/reportePartido.php" method="POST" target="_blank">
        <div class="col-md-6">
        <input type="submit" class="btn btn-outline-dark btn-sm" value="Generar reporte Partidos">
        </div>
        </form
   <br>
   <br>
    <div class="col-md-6">
            <button id="verInactivos" class="btn btn-outline-dark btn-sm" >Ver Usuarios Inactivos</button>
            </div>
            <table class="table table-ligt" id="tblPart" style="text-align:center;">
                <thead Style="background-color:#313e48;color:#ffffff;">
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

                        foreach($data as $d):
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
                        <th><?php echo $id;?></th>
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
                        <td><?php if($estado == 1){echo "Activo";} ?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-sm col-12" 
                            onclick="$('#idPartido').val('<?php echo $id;?>');
                                     $('#nomPartido').val('<?php echo $nombrePart;?>');
                                     $('#nomCandi').val('<?php echo $nombreCand;?>');
                                     $('#completo').val('');habilitarBtnB();
                                     $('#fotoB').val('');$('#fotoC').val('');
                                     $('#textoB').attr('hidden', false);
                                     $('#textoC').attr('hidden', true);
                                     $('#seccionC').attr('hidden', true);
                                     $('#seccionB').attr('hidden', true);">
                                EDITAR BÁSICO
                            </button>
                            <button class="btn btn-outline-dark btn-sm col-12" 
                            onclick="$('#idPartido').val('<?php echo $id;?>');
                                     $('#nomPartido').val('<?php echo $nombrePart;?>');
                                     $('#nomCandi').val('<?php echo $nombreCand;?>');
                                     $('#fotoB').val('<?php echo $bandera;?>');
                                     $('#fotoC').val('<?php echo $candidato;?>');
                                     $('#completo').val('SI');habilitarBtn();
                                     $('#textoB').attr('hidden', true);
                                     $('#textoC').attr('hidden', false);
                                     $('#seccionC').attr('hidden', false);
                                     $('#seccionB').attr('hidden', false);">
                                EDITAR COMPLETO
                            </button>
                        </td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
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
    <script src="../views/resources/src/js/jsDelivr.js"></script>
    <script src="../views/resources/js/deslogueo.js"></script>
    <script src="../views/resources/js/partido.js"></script>
</html>

