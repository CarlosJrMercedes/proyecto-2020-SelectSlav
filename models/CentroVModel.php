<?php
    require "Conexion.php";
    require "CentroV.php";

    class CentroVModel extends Conexion{ 

        function getAllCentroV(){
            $para = $this->con->query("SELECT cv.*,m.nombre as nombreCentro, m.id_munici
             FROM centro_votacion cv INNER JOIN municipios m ON cv.id_munici = m.id_munici WHERE cv.estado=1");
            $r = array();

            while($row=$para->fetch_assoc()){
                $cen = new CentroV($row["id_centro"],$row["nombre"],$row["nombreCentro"],
                $row["direccion"],$row["fecha_creacion"],
                $row["fecha_modificacion"],
                $row["estado"]);
                $r[]=$cen;
            }
            return $r;
        } 


        function getAllCentroVInact(){
            $para = $this->con->query("SELECT * FROM centro_votacion WHERE estado= 2");
            $r = array();

            while($row=$para->fetch_assoc()){
                $cen = new CentroV($row["id_centro"],$row["nombre"],$row["id_munici"],
                $row["direccion"],$row["fecha_creacion"],
                $row["fecha_modificacion"],
                $row["estado"]);
                $r[]=$cen;
            }
            return $r;
        } 

        function getAllMuni(){
            $sql = $this->con->query("SELECT id_munici, nombre FROM municipios WHERE estado =1");
           
            return $sql;
        }
        function insertCentroV($nombre,$id_munici,$direccion){
            try {
                $sql = $this->con->prepare("INSERT INTO centro_votacion(
                nombre,id_munici,direccion,fecha_creacion,estado) VALUES (?, ?, ?,NOW(),1)");
                $sql->bind_param('sis',$a,$b,$c);
                $a = $nombre;
                $b = $id_munici;
                $c = $direccion;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }

        function modCentroV($id_centro,$nombre,$id_munici,$direccion){
            try {
                $sql = $this->con->prepare("UPDATE centro_votacion SET nombre=?, id_munici=?
                , direccion =?, fecha_modificacion= NOW() WHERE id_centro=?");
                $sql->bind_param('sisi',$a,$b,$c,$e);
                $a = $nombre;
                $b = $id_munici;
                $c = $direccion;
                $e = $id_centro;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }


        function eleCentroV($id_centro){
            try {
                $sql = $this->con->prepare("DELETE FROM centro_votacion WHERE id_centro=?");
                $sql->bind_param('i',$a);
                $a = $id_centro;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            } 
        }
        function desaCentro($id_centro){
            try {
                $sql = $this->con->prepare("UPDATE centro_votacion SET estado = 2 WHERE id_centro=?");
                $sql->bind_param('i',$a);
                $a = $id_centro;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }


        function actiCentro($id_centro){
            try {
                $sql = $this->con->prepare("UPDATE centro_votacion SET estado = 1 WHERE id_centro=?");
                $sql->bind_param('i',$a);
                $a = $id_centro;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }

    }
?>