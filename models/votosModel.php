<?php
require "Conexion.php";
require "votos.php";

class VotosModel extends Conexion
{
    function getAllVotos()
    {
        $v = $this->con->query("SELECT v.*,
        m.nombre AS nombreMun,
        jr.nombre AS nombreJunta,
        p.nombre_partido as nombrePar 
        FROM votos AS v 
        INNER JOIN municipios AS m ON m.id_munici = v.id_munici
        INNER JOIN junta_receptora AS jr ON jr.id_junta = v.id_junta
        INNER JOIN partido_politico AS p ON p.id_partido = v.id_partido
        where v.estado=1");
       
        return $v;
    }
    function getAllPartidos()
    {
        $v = $this->con->query("SELECT * FROM partido_politico WHERE estado=1");
       
        return $v;
    }

    function getVotos()
    {
        $v = $this->con->query("SELECT  v.id_voto,v.dui_votante, m.nombre as municipio, j.nombre as junta,
         p.nombre_partido, v.fecha_creacion, v.fecha_modificacion, v.estado
        FROM votos v
        INNER JOIN municipios m
        INNER JOIN junta_receptora j
        INNER JOIN partido_politico p
        WHERE v.id_munici=m.id_munici
        AND v.id_junta = j.id_junta
        AND v.id_partido = p.id_partido
        AND v.estado = 1");
        return $v;
    }

    function getVotosInact()
    {
        $v = $this->con->query("SELECT  v.id_voto,v.dui_votante, m.nombre as municipio, j.nombre as junta,
         p.nombre_partido, v.fecha_creacion, v.fecha_modificacion, v.estado
        FROM votos v
        INNER JOIN municipios m
        INNER JOIN junta_receptora j
        INNER JOIN partido_politico p
        WHERE v.id_munici=m.id_munici
        AND v.id_junta = j.id_junta
        AND v.id_partido = p.id_partido
        AND v.estado = 2");
        return $v;
    }



    function desaVoto($idVoto){
        try {
            $sql = $this->con->prepare("UPDATE votos SET estado = 2,fecha_modificacion= NOW() WHERE id_voto=?");
            $sql->bind_param('i',$a);
            $a = $idVoto;
            if($sql->execute()){

                return 1;
            }
        } catch (Exception $ex) {
            return $ex;
        }
        finally{
            $sql->close();
        }
    }
    function actiVoto($idVoto){
        try {
            $sql = $this->con->prepare("UPDATE votos SET estado = 1,fecha_modificacion= NOW() WHERE id_voto=?");
            $sql->bind_param('i',$a);
            $a = $idVoto;
            if($sql->execute()){

                return 1;
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