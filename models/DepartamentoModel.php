<?php
require "Conexion.php";
require "Departamentos.php";

class DepartamentoModel extends Conexion
{
    function getAllDept(){
        $cositas = $this->con->query("SELECT * FROM departamentos WHERE estado = 1");
        $q = array();
        while($fila=$cositas->fetch_assoc()){
            $depa = new Departamentos($fila["id_dept"],$fila["nombre"],$fila["fecha_creacion"],$fila["fecha_modificacion"],
            $fila["estado"]);
            $q[]=$depa;
        }
        return $q;
    }

    function getAllDeptInactivos(){
        $cositas = $this->con->query("SELECT * FROM departamentos WHERE estado=2");
        $q = array();
        while($fila=$cositas->fetch_assoc()){
            $depa = new Departamentos($fila["id_dept"],$fila["nombre"],$fila["fecha_creacion"],$fila["fecha_modificacion"],
            $fila["estado"]);
            $q[]=$depa;
        }
        return $q;
    }
    
    function insertDept($nombre){

        try {
            $sql = $this->con->prepare("INSERT INTO departamentos (nombre,
            fecha_creacion,estado) VALUES (?, NOW(),1)");
            $sql->bind_param('s',$a);
            $a = $nombre;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }
        finally{
            $sql->close();
        }
        
    }

    function modDept($nombre,$idDept){

        try {
            $sql = $this->con->prepare("UPDATE departamentos SET nombre=?, fecha_modificacion= NOW() WHERE id_dept=?");
            $sql->bind_param('si',$a,$b);
            $a = $nombre;
            $b = $idDept;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }
        finally{
            $sql->close();
        }
    }
    function eleDept($idDept){

        try {
            $sql = $this->con->prepare("DELETE FROM departamentos WHERE id_dept=?");
            $sql->bind_param('s',$a);
            $a= $idDept;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }
        finally{
            $sql->close();
        }
    }
    function desaDept($idDept){
        try {
            $sql = $this->con->prepare("UPDATE departamentos SET estado=2 WHERE id_dept=?");
            $sql->bind_param('s',$a);
            $a= $idDept;
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return $ex;
        }
        finally{
            $sql->close();
        }
    }
    function activarDept($idDept){
        try {
            $sql = $this->con->prepare("UPDATE departamentos SET estado=1 WHERE id_dept=?");
            $sql->bind_param('s',$a);
            $a=$idDept;
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