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
        where v.estado=1;");
       
        return $v;
    }
    function getAllPartidos()
    {
        $v = $this->con->query("SELECT * FROM partido_politico WHERE estado=1;");
       
        return $v;
    }
}
    ?>