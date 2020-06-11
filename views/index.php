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
    <link href="../views/resources/src/css/bootstrap-select.min.css">
    <link href="../views/resources/src/css/tail.select-default.min.css">
    <link href="../views/resources/css/style.css">
</head>
<body style="padding-buttom:5%;background-color:#313e48;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #313e48;">
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="navbar-nav mr-auto">
                    <img src="../views/resources/img/logotipo.png" width="100px" heigth="100px" class="rounded float-left">
                </div>
                <div class="navbar-nav m-auto">
                    <img src="../views/resources/img/eslogan2.png" style="width:70%;" class="mx-auto d-block" alt="Responsive image">
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
                         id="">Iniciar sesion</button>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Salir</a>
                    </div>   

                </div>
            <!-- </div> -->
        </nav>
    </header>



    <div class="container">
        <!-- modal de inicio de sesion -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="padding-left:30%;" id="exampleModalLabel">
                            SelectSalv S.A de C.V</h5>
                        <button type="button" class="close" 
                        data-dismiss="modal" aria-label="Close" id="closeModal">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="../views/resources/img/logocolor2.png" 
                        width="50%" class="mx-auto d-block" alt="Responsive image">
                        
                        <form id="formLogin">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">
                                    Usuario :
                                </label>
                                <input type="text" class="form-control" id="usuario" name="usuario">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Contraseña :</label>
                                <input type="password" class="form-control" id="contra" name="contra"></input>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" 
                        data-dismiss="modal" id="closeModal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" id="log">
                            Ingresar
                        </button>
                    </div>
                </div>
            </div>
        </div>      
        <!-- fin modal de inicio de sesion -->
    </div>

    <div id="carousel1" class="carousel slide" data-ride="carousel" style="background-color: rgba(255, 255, 255, 0.3);">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banderaEs.jpg" alt="" 
                width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="img/mapa.png" alt="" 
                width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="img/flor.jpg" alt="" 
                width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="img/torogoz.jpg" alt="" 
                width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="img/arbol.jpg" alt="" 
                width="100%" height="500px">
            </div>
            <div class="carousel-item" style="text-align:center;">
                <img src="img/escudo.png" alt="" 
                width="50%" height="500px">
            </div>
        </div>
        
        <!--Controles NEXT y PREV-->
        <a class="carousel-control-prev" href="#carousel1" 
        role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--Controles de indicadores-->
        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
            <li data-target="#carousel1" data-slide-to="3"></li>
            <li data-target="#carousel1" data-slide-to="4"></li>
            <li data-target="#carousel1" data-slide-to="5"></li>
        </ol>
    </div>

    <div class="col-md-12" style="color:#ffffff;text-align:center;">
        <p>
            <h3>
                <font face="Bell MT">
                    <b>
                        SISTEMA DE VOTACIONES EN LINEA
                    </b>
                </font>
            </h3>
        </p>
    </div>

    <div style="padding:1%;background-color: rgba(255, 255, 255, 0.3);">
        <div class="form-row" id="formMantenimiento" style="padding:5%;">
            <div class="col-md-12">
                <font face="Bell MT" color="#0000">
                    <label for="">
                    <b>
                        <h3> Complete el siguiente formulario....</h3>
                    </b>
                    </label>
                </font>
            </div>
            <div class="col-md-6">
                <font face="Bell MT" color="#0000">
                    <label for="">
                    <b>
                        <h5> Número de DUI :</h5>
                    </b>
                    </label>
                </font>
                <input type="text" id="dui" class="form-control form-control-sm" placeholder=".....">
                <input type="text" id="idPartido" readonly hidden>
                <input type="text" id="fotoVoto" readonly hidden>
                <input type="text" id="nombreP" readonly hidden>
            </div>
            <div class="col-md-6">
                <font face="Bell MT" color="#0000">
                    <label for="">
                    <b>
                        <h5> Departamento de su localidad :</h5>
                    </b>
                    </label>
                </font>
                <select class="js-example-basic-single form-control" 
                name="dept" id="dept">
                    <option value="0" selected><h6>SELECCIONE</h6></option>
                    <?php
                        foreach($selectDept as $dept):
                    ?>
                        <option value="<?php echo $dept["id_dept"];?>"><?php echo $dept["nombre"];?></option>
                    <?php
                        endforeach;
                    ?>
                </select>

            </div>
            <div class="clearfix"></div>

            <div id="selectMuni" class="col-md-4">
                <font face="Bell MT" color="#0000">
                    <label for="">
                        <b>
                            <br>
                            <h5> Municipio de su localidad :</h5>
                        </b>
                    </label>
                </font>
                <select class="js-example-basic-single form-control" 
                name="muni" id="muni">
                <option value="0"><h6>SELECCIONE</h6></option>
                    
                </select>
            </div>
            <div id="selectCentro" class="col-md-4">
                <font face="Bell MT" color="#0000">
                    <label for="">
                        <b>
                            <br>
                            <h5> Centro de votación de su localidad :</h5>
                        </b>
                    </label>
                </font>
                <select class="js-example-basic-single form-control" 
                name="cV" id="cV">
                <option value="0"><h6>SELECCIONE</h6></option>
                    
                </select>
            </div>
            <div id="selectJunta" class="col-md-4">
                <font face="Bell MT" color="#0000">
                    <label for="">
                        <b>
                            <br>
                            <h5> Centro de votación de su localidad :</h5>
                        </b>
                    </label>
                </font>
                <select name="jR" id="jR" class="js-example-basic-single form-control">
                    <option value="0"><h6>SELECCIONE</h6></option>
                </select>
                
            <br>
            <br>
            <br>
            </div>
            <div class="col-md-12 bander" hidden>
                <font face="Bell MT" color="#0000">
                    <label for="">
                    <b>
                        <h3> Seleccione con un click la bandera de su elección....</h3>
                    </b>
                    </label>
                </font>
            </div>

            <?php
                foreach($images as $img):
                    $idPartido = $img["id_partido"];
                    $nombreP = $img["nombre_partido"];
                    $bandera = $img["foto_bandera_partido"];
                    $candidato = $img["foto_candidato"];
            ?>
        
                <div class="col-md-2 bander" style="text-align:center;" hidden>
                <button class="btn btn-outline-dark btn-lg" id="voto" type="button"
                onclick="$('#idPartido').val('<?php echo$idPartido?>');
                        $('#fotoVoto').val('<?php echo$bandera?>');
                        $('#nombreP').val('<?php echo$nombreP?>')">
                    <img src="<?php echo $bandera;?>" alt="" width="150px" 
                    heigth="150px">
                    <font face="Bell MT" color="#ffffff">
                        <label for="">
                            <b>
                                <h5> <?php echo $nombreP;?></h5>
                            </b>
                        </label>
                    </font>
                </button>
                    
                </div>
        
            <?php
                endforeach;
            ?>
        </div>

    </div>
    <div class="col-md-12" style="color:#ffffff;text-align:center;">
        <p>
            <h2>
                <font face="Bell MT">
                    <b>
                        Estadísticas de las votaciones
                    </b>
                </font>
            </h2>
        </p>
    </div>

   <div class="container" style="padding-buttom:5%;">
       <div class="row">
            <div class="col-md-6" id="graficosUno" style="height:500px;">

            </div>
            <div class="col-md-6" id="grafico2" style="float:right;height:500px;">

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
<!-- <script src="../views/resources/src/js/jquery-3.2.1.slim.min.js"></script> -->
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
    <script src="../views/resources/src/js/highcharts.js"></script>
    <script src="../views/resources/src/js/data.js"></script>
    <script src="../views/resources/src/js/drilldown.js"></script>
    <script src="../views/resources/src/js/exporting.js"></script>
    <script src="../views/resources/src/js/export-data.js"></script>
    <script src="../views/resources/src/js/accessibility.js"></script>
    <script src="../views/resources/js/index.js"></script>
    <script src="../views/resources/js/login.js"></script>
    <script>
        $(function(){
            $("#graficosUno").highcharts({
                chart: {type :'column'},
                title: {text: 'Estadísticas de votos'},
                xAxis: {categories: [<?= $partido?>]},
                yAxis: {title: {text: 'Resultado'}},
                series:[{name: 'Votos',colorByPoint: true, data: [<?= $votos?>]}]
            });
        });

        $(function(){
            $("#grafico2").highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Estadisticas de votos por partido político'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                    name: 'Share',
                    data: [
                        <?php
                            foreach($data as $d):
                        ?>
                        { name: '<?php echo$d["nombre_partido"]?>', y: <?=(($d['votos']*100)/$tVotos)?> },
                        <?php
                            endforeach;
                        ?>
                        
                    ]
                }]
            });
        });
    </script>
</html>