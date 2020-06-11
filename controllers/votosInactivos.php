<?php

    require "../models/votosModel.php"; 
    $voModel = new VotosModel();    

    if (isset($_POST["activarVoto"]) != null) {
        $idVoto = $_POST["activarVoto"];
        $voModel->actiVoto($idVoto);

    }
    
    
    $resp = $voModel->getVotosInact();




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
    <input type="text" id="activarVoto" readonly hidden>
        <table class="table table-ligt" id="tblVotosInact" style="text-align:center;">
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

                        foreach($resp as $d):
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
                        <td><?php if($estado == 2){echo "ANULADO";} ?></td>
                        <td>
                            <button class="btn btn-outline-secondary btn-lg" 
                            onclick="$('#activarVoto').val('<?php echo $id?>');habilitarUsu();">
                                VALIDAR
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
                $("#tblVotosInact").DataTable();
            });
            </script>
            </html>