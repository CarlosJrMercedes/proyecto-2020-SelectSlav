<?php
    require "Conexion.php";
    require "Usuarios.php";
    require "Rol.php";
    class UsuarioModel extends Conexion{


        function validarUsu($usu,$pass){

            $sql = $this->con->prepare("SELECT nombre_completo, id_rol, usuario 
            FROM usuarios WHERE usuario=? AND contrasenia = ? AND estado= 1");
            $sql->bind_param('ss',$a,$b);
            $a=$usu;
            $b=sha1($pass);
            $sql->execute();
    
            while($sql->fetch()){
               return 1;
            }
            return 0;
        }


        function getAllUsers(){
            $para = $this->con->query("  SELECT us.*, r.rol, r.id_rol FROM usuarios us INNER JOIN rol r ON us.id_rol = r.id_rol WHERE us.estado=1");
            $r = array();

            while($row=$para->fetch_assoc()){
                $us = new Usuarios($row["id_usuario"],$row["nombre_completo"],$row["rol"],
                $row["usuario"],$row["contrasenia"],$row["fecha_creacion"],
                $row["fecha_modificacion"],
                $row["estado"]);
                $r[]=$us;
            }
            return $r;
        }




        function getAllUsersInact(){
            $para = $this->con->query("SELECT * FROM usuarios WHERE estado= 2");
            $r = array();

            while($row=$para->fetch_assoc()){
                $us = new Usuarios($row["id_usuario"],$row["nombre_completo"],
                $row["id_rol"],
                $row["usuario"],$row["contrasenia"],$row["fecha_creacion"],
                $row["fecha_modificacion"],
                $row["estado"]);
                $r[]=$us;
            }
            return $r;
        }





        function getAllRol(){
            $sql = $this->con->query("SELECT id_rol,rol FROM rol WHERE estado =1");
            $r = array();
            while($row = $sql->fetch_assoc()){
                $roles = new Rol ($row["id_rol"],$row["rol"]);
                $r[] =$roles; 
            }
            return $r;
        }


        function insertUsu($nombre,$rol,$usu,$contra){
            try {
                $sql = $this->con->prepare("INSERT INTO USUARIOS(nombre_completo,
                id_rol,usuario,contrasenia,fecha_creacion,estado) 
                VALUES (?, ?, ?, ?,NOW(),1)");
                $sql->bind_param('siss',$a,$b,$c,$d);
                $a = $nombre;
                $b = $rol;
                $c = $usu;
                $d = $contra;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }

        function modUsu($nombre,$rol,$usu,$contra,$idUsu){
            try {
                $sql = $this->con->prepare("UPDATE usuarios SET nombre_completo=?, id_rol=?
                , usuario =?, contrasenia=?, fecha_modificacion= NOW() WHERE id_usuario=?");
                $sql->bind_param('sissi',$a,$b,$c,$d,$e);
                $a = $nombre;
                $b = $rol;
                $c = $usu;
                $d = $contra;
                $e = $idUsu;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }


        function eleUsu($idUsu){
            try {
                $sql = $this->con->prepare("DELETE FROM usuarios WHERE id_usuario=?");
                $sql->bind_param('i',$a);
                $a = $idUsu;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }
        function desaUsu($idUsu){
            try {
                $sql = $this->con->prepare("UPDATE usuarios SET estado = 2 WHERE id_usuario=?");
                $sql->bind_param('i',$a);
                $a = $idUsu;
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return $ex;
            }
            finally{
                $sql->close();
            }
        }

        function actiUsu($idUsu){
            try {
                $sql = $this->con->prepare("UPDATE usuarios SET estado = 1 WHERE id_usuario=?");
                $sql->bind_param('i',$a);
                $a = $idUsu;
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