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
    <div class="container" >
        <form action="../controllers/reporteVotosPartido.php" method="POST" target="_blank">
            <div class="col-md-6">
                <label for="">Eliga Partido :</label>
                <select name="idPartido" id="idPartido" class="form-control" required>
                    <option value="" >SELECCIONE</option>
                    <?php
                        foreach($sql as $p):
                    ?>
                        
                        <option value="<?php echo $p["id_partido"]; ?>"><?php echo $p["nombre_partido"]; ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            <br>
            <input type="submit" class="btn btn-outline-secondary btn-lg" 
            value="Generar reporte de votos">     
            <br> 
            <br> 
            <br> 
            </div>
        </form>
        <input type="text" id="id" readonly hidden>
        <button id="regresar" class="btn btn-outline-warning btn-lg" hidden>Regresar</button>
        <div id="tblActivos">
            <button id="verInactivos" class="btn btn-outline-dark btn-sm" >Ver Usuarios Inactivos</button>
            <table class="table table-ligt" id="tblVotos" style="text-align:center;">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>DUI PERSONA</th>
                        <th>MUNICIPIO</th>
                        <th>JUNTA RECEPTORA</th>
                        <th>PARTIDO POLITICO</th>
                        <th>FECHA INGRESO</th>
                        <th>FECHA ANULACION</th>
                        <th>ESTADO</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach($votos as $d):
                            $id = $d["id_voto"];
                            $votante = $d["dui_votante"];
                            $municipio = $d["municipio"];
                            $junta = $d["junta"];
                            $partido = $d["nombre_partido"];
                            $creacion = $d["fecha_creacion"];
                            $modificacion = $d["fecha_modificacion"];
                            $estado = $d["estado"];
                    ?>
                    <tr>
                        <th><?php echo $id;?></th>
                        <td><?php echo $votante;?></td>
                        <td><?php echo $municipio;?></td>
                        <td><?php echo $junta;?></td>
                        <td><?php echo $partido;?></td>
                        <td><?php echo $creacion;?></td>
                        <td><?php echo $modificacion;?></td>
                        <td><?php if($estado == 1){echo "Activo";} ?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-lg" 
                            onclick="$('#id').val('<?php echo $id?>');desavilitarVoto();">
                                ANULAR
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
    <script src="../views/resources/js/votos.js"></script>
    <script src="../views/resources/js/deslogueo.js"></script>
</html>