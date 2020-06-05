<?php
require "Conexion.php";
require "juntaReceptora.php";

class juntaReceptoraModel extends Conexion
{
    function getAllJunta(){
    $j = $this->con->query("SELECT jr.*, c.nombre as nombreCentro, c.id_centro FROM junta_receptora jr 
    INNER JOIN centro_votacion c ON jr.id_centro = c.id_centro where jr.estado =1");
    $r = array();
    while($fila=$j->fetch_assoc())
    {
    $junta = new juntaReceptora($fila["id_junta"],$fila["nombre"],$fila["id_centro"],$fila["nombreCentro"],$fila["fecha_creacion"],$fila["fecha_modificacion"],
    $fila["estado"]);
    $r[]=$junta;
    }
    return $r;
    }


    function getAllJuntasInac(){
        $fregadera = $this->con->query("SELECT jr.*, c.nombre as nombreCentro, c.id_centro FROM junta_receptora jr 
        INNER JOIN centro_votacion c ON jr.id_centro = c.id_centro where jr.estado =2");
        $r = array();
        while($fila=$fregadera->fetch_assoc())
        {
        $junta = new juntaReceptora($fila["id_junta"],$fila["nombre"],$fila["id_centro"],$fila["nombreCentro"],$fila["fecha_creacion"],$fila["fecha_modificacion"],
        $fila["estado"]);
        $r[]=$junta;
        }
        return $r;
        }
    function getAllCentro()
    {
        $sql = $this->con->query("SELECT id_centro,nombre FROM centro_votacion WHERE estado =1");
        
        return $sql;
    }

    function insertJunta($nombre,$centro){
        try {
            $sql = $this->con->prepare("INSERT INTO junta_receptora (nombre,id_centro,fecha_creacion,fecha_modificacion,estado)
            VALUES (?,?,NOW(),NOW(),1);");
            $sql->bind_param('ss',$a,$b);
            $a = $nombre;
            $b = $centro;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }finally{
            $sql->close();
        }

    }

    function updaJunta($nombre,$centro,$id_Junta){

        try {
            $sql = $this->con->prepare("UPDATE junta_receptora set nombre=?,id_centro=?,fecha_modificacion=NOW() WHERE id_junta=?");
            $sql->bind_param('ssi',$a,$b,$c);
            $a = $nombre;
            $b = $centro;
            $c = $id_Junta;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex; 
        }finally{
            $sql->close();
        }
    }

    function delJunta($id_Junta){

        try {
            $sql = $this->con->prepare("DELETE FROM junta_receptora WHERE id_junta=?");
            $sql->bind_param('i',$a);
            $a = $id_Junta;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }finally{
            $sql->close();
        }
    }
    function desactivarJunta($id_Junta){

        try {
            $sql = $this->con->prepare("UPDATE junta_receptora SET estado=2 WHERE id_junta=?");
            $sql->bind_param('i',$a);
            $a = $id_Junta;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }finally{
            $sql->close();
        }
    }
    function habilitarJunta($id_Junta){

        try {
            $sql = $this->con->prepare("UPDATE junta_receptora SET estado=1 WHERE id_junta=?");
            $sql->bind_param('i',$a);
            $a = $id_Junta;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }finally{
            $sql->close();
        }
    }
}
?>