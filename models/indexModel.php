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

    }



?>