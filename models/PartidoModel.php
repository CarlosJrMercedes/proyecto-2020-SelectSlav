<?php
    require "PartidoPolitico.php";
    require "Conexion.php";

    class PartidoModel extends Conexion{


        function getAllPartidos(){
            $sql = $this->con->query("SELECT * FROM partido_politico WHERE estado=1");
            $r = array();

            while ($row=$sql->fetch_assoc()){
                $pp = new PartidoPolitico($row["id_partido"],$row["nombre_partido"],
                $row["nombre_candidato"],$row["foto_bandera_partido"],$row["foto_candidato"],
                $row["fecha_creacion"],$row["fecha_modificacion"],$row["estado"]);
                $r[] = $pp;
            }
            return $r;

        }

        function getAllPartidosInact(){
            $sql = $this->con->query("SELECT * FROM partido_politico WHERE estado=2");
            $r = array();

            while ($row=$sql->fetch_assoc()){
                $pp = new PartidoPolitico($row["id_partido"],$row["nombre_partido"],
                $row["nombre_candidato"],$row["foto_bandera_partido"],$row["foto_candidato"],
                $row["fecha_creacion"],$row["fecha_modificacion"],$row["estado"]);
                $r[] = $pp;
            }
            return $r;

        }




        function insertPartido($nombre,$nombreCandi,$fotoB,$fotoC){
            try {
                $sql = $this->con->prepare("INSERT INTO partido_politico(nombre_partido,
                nombre_candidato,foto_bandera_partido,foto_candidato,fecha_creacion,
                estado)VALUES(?,?,?,?,NOW(),1)");
                $sql->bind_param('ssss',$a,$b,$c,$d);
                $a = $nombre;
                $b = $nombreCandi;
                $c = $fotoB;
                $d = $fotoC;
                $sql->execute();
                
            } catch (Wxwction $ex) {
                return $ex;
            } finally{
                $sql->close();
                return 1;
            }
        }

        function mod1Partido($nombre,$nombreCandi,$fotoB,$fotoC,$id){
            try {
                $sql = $this->con->prepare("UPDATE partido_politico SET nombre_partido=?, 
                nombre_candidato = ?, foto_bandera_partido = ?, foto_candidato = ?, 
                fecha_modificacion = NOW() WHERE id_partido = ?");
                $sql->bind_param('ssssi',$a,$b,$c,$d,$e);
                $a = $nombre;
                $b = $nombreCandi;
                $c = $fotoB;
                $d = $fotoC;
                $e = $id;
                $sql->execute();
                
            } catch (Wxwction $ex) {
                return $ex;
            } finally{
                $sql->close();
                return 1;
            }
        }


        function mod2Partido($nombre,$nombreCandi,$id){
            try {
                $sql = $this->con->prepare("UPDATE partido_politico SET nombre_partido=?, 
                nombre_candidato = ?, fecha_modificacion = NOW() WHERE id_partido = ?");
                $sql->bind_param('ssi',$a,$b,$c);
                $a = $nombre;
                $b = $nombreCandi;
                $c = $id;
                $sql->execute();
                
            } catch (Wxwction $ex) {
                return $ex;
            } finally{
                $sql->close();
                return 1;
            }
        }

        function dropPartido($id){
            try {
                $sql = $this->con->prepare("DELETE FROM partido_politico
                 WHERE id_partido = ?");
                $sql->bind_param('i',$a);
                $a = $id;
                

                if($sql->execute()){

                    return 1;
                }
            } catch (Wxwction $ex) {
                return $ex;
            } finally{
                $sql->close();
               
            }
        }

        function desacPartido($id){
            try {
                $sql = $this->con->prepare("UPDATE partido_politico set estado =2 
                 WHERE id_partido = ?");
                $sql->bind_param('i',$a);
                $a = $id;
                $sql->execute();
                
            } catch (Wxwction $ex) {
                return $ex;
            } finally{
                $sql->close();
                return 1;
            }
        }

        function actiPartido($id){
            try {
                $sql = $this->con->prepare("UPDATE partido_politico set estado =1 
                 WHERE id_partido = ?");
                $sql->bind_param('i',$a);
                $a = $id;
                $sql->execute();
                
            } catch (Wxwction $ex) {
                return $ex;
            } finally{
                $sql->close();
                return 1;
            }
        }

    }

?>