<?php
require "Conexion.php";
require "Municipios.php";

class MunicipioModel extends Conexion
{
    function getAllMunici()
    {
        $m = $this->con->query("SELECT m.*,d.nombre as nombreDept,d.id_dept FROM municipios m INNER JOIN departamentos d ON m.id_dept = d.id_dept WHERE m.estado= 1");
       
        return $m;
    }

    function getAllMuniciInactivos()
    {
        $m = $this->con->query("SELECT * FROM municipios WHERE estado=2");
        $q = array();
        while($fila=$m->fetch_assoc())
        {
            $muni = new Municipios($fila["id_munici"],$fila["nombre"],$fila["id_dept"],$fila["fecha_creacion"],$fila["fecha_modificacion"],
            $fila["estado"]);
            $q[]=$muni;
        }
        return $q;
    }
    
    function insertMunici($nombre,$dept)
    {

        try
        {
            $sql = $this->con->prepare("INSERT INTO municipios (nombre,id_dept,fecha_creacion,estado)
            VALUES (?,?,NOW(),1)");
            $sql->bind_param('si',$a,$b);
            $a = $nombre;
            $b = $dept;
            $sql->execute();
            return 1;
        } 
        catch (Exception $ex)
        {
            return $ex;
        }
        finally
        {
            $sql->close();
        }
        
    }

    function modifyMunici($nombre,$idDept,$idMunici)
    {
        try
        {
            $sql = $this->con->prepare("UPDATE municipios SET nombre=?, id_dept=?,fecha_modificacion= NOW() WHERE id_munici=?");
            $sql->bind_param('sii',$a,$b,$c);
            $a = $nombre;
            $b = $idDept;
            $c = $idMunici;
            $sql->execute();
            return 1;
        } 
        catch (Exception $ex)
        {
            return $ex;
        }
        finally
        {
            $sql->close();
        }
    }

    function deleteMunici($idMunici)
    {
        try
        {
            $sql = $this->con->prepare("DELETE FROM municipios WHERE id_munici=?");
            $sql->bind_param('i',$a);
            $a= $idMunici;
            $sql->execute();
            return 1;
        }
        catch (Exception $ex)
        {
            return $ex;
        }
        finally
        {
            $sql->close();
        }
    }
    function desactivarMunici($id_munici)
    {
        try
        {
            $sql = $this->con->prepare("UPDATE municipios SET estado=2 WHERE id_munici=?");
            $sql->bind_param('i',$a);
            $a= $id_munici;
            $sql->execute();
            return 1;
        }
        catch (Exception $ex)
        {
            return $ex;
        }
        finally
        {
            $sql->close();
        }
    }

    function activarMunici($id_munici)
    {
        try
        {
            $sql = $this->con->prepare("UPDATE municipios SET estado=1 WHERE id_munici=?");
            $sql->bind_param('s',$a);
            $a=$id_munici;
            $sql->execute();
            return 1;
        }
        catch (Exception $ex)
        {
            return $ex;
        }
        finally
        {
            $sql->close();
        }
    }

    function getAllDept()
    {
        $sql = $this->con->query("SELECT id_dept,nombre FROM departamentos WHERE estado =1");
        
        return $sql;
    }
    function getAllImg()
    {
        $sql = $this->con->query("SELECT id_partido, nombre_partido, foto_bandera_partido, foto_candidato FROM partido_politico WHERE estado = 1");
        
        return $sql;
    }

    function graficas(){

        $sql = $this->con->query("SELECT  p.nombre_partido, count(*) AS votos 
        FROM votos v INNER JOIN partido_politico p WHERE p.id_partido = v.id_partido
        GROUP BY v.id_partido");

        return $sql;

    }

    function totalVotos(){

        $sql = $this->con->query("SELECT count(*) AS totalVotos FROM votos");

        return $sql;

    }

}
?>