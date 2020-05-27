<?php
    class Usuarios{

        private $id_usuario;
        private $nombre_completo;
        private $id_rol;
        private $usuario;
        private $contrasenia;
        private $fecha_creacion;
        private $fecha_modificacion;
        private $estado;


        function __construct($id_usuario, $nombre_completo, $id_rol, $usuario,$contrasenia,
        $fecha_creacion, $fecha_modificacion, $estado){

            $this->id_usuario = $id_usuario;
            $this->nombre_completo = $nombre_completo;
            $this->id_rol = $id_rol;
            $this->usuario = $usuario;
            $this->contrasenia = $contrasenia;
            $this->fecha_creacion = $fecha_creacion;
            $this->fecha_modificacion = $fecha_modificacion;
            $this->estado = $estado;
        }

        

        function getId_usuario(){
            return $this->id_usuario;
        }
        function setId_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
        
        function getNombre_completo(){
            return $this->nombre_completo;
        }
        function setNombre_completo($nombre_completo){
            $this->nombre_completo = $nombre_completo;
        }

        function getId_rol(){
            return $this->id_rol;
        }
        function setId_rol($id_rol){
            $this->id_rol = $id_rol;
        }
        
        function getUsuario(){
            return $this->usuario;
        }
        function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        function getContrasenia(){
            return $this->contrasenia;
        }
        function setContrasenia($contrasenia){
            $this->contrasenia = $contrasenia;
        }

        function getFecha_creacion(){
            return $this->fecha_creacion;
        }
        function setFecha_creacion($fecha_creacion){
            $this->fecha_creacion = $fecha_creacion;
        }

        function getFecha_modificacion(){
            return $this->fecha_modificacion;
        }
        function setFecha_modificacion($fecha_modificacion){
            $this->fecha_modificacion = $fecha_modificacion;
        }

        function getEstado(){
            return $this->estado;
        }
        function setEstado($estado){
            $this->estado = $estado;
        }

    }

?>