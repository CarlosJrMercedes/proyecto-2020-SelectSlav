<?php
    require "Conexion.php";
    class IndexModel extends Conexion{

        function getMunicipios($dept){
            $sql = $this->con->query("SELECT id_munici, nombre 
            FROM municipios where estado = 1 AND id_dept = ".$dept."");
            return $sql;
        }

        function getCv($muni){
            $sql = $this->con->query("SELECT id_centro, nombre 
            FROM centro_votacion where estado = 1 AND id_munici = ".$muni."");
            return $sql;
        }


        function getJr($cV){
            $sql = $this->con->query("SELECT id_junta, nombre 
            FROM junta_receptora where estado = 1 AND id_centro = ".$cV."");
            return $sql;
        }

        function verificarDui($dui){
            try {
                $sql = $this->con->prepare("SELECT dui_votante FROM votos WHERE dui_votante = ?");
                $sql->bind_param('s',$a);
                $a = $dui;
                $sql->execute();
                $result = $sql->get_result();
                $r = $result->fetch_assoc();
                if($r != null){
                    return 1;
                }
                else{
                    return 0;
                }
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
            
        }

        function insertVoto($dui,$muni,$junta,$partido){
            try {
                $sql = $this->con->prepare("INSERT INTO votos(dui_votante,
                id_munici,id_junta,id_partido,fecha_creacion,estado) 
                VALUES (?, ?, ?, ?,NOW(),1)");
                $sql->bind_param('siii',$a,$b,$c,$d);
                $a = $dui;
                $b = $muni;
                $c = $junta;
                $d = $partido;
                if($sql->execute()){
                    return 1;
                }
                else{
                    return 0;
                }

            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }

        

    }



?>