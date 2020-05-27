<?php
    class Rol{
        private $id_rol;
        private $rol;
        private $estado;

        function __construct($id_rol, $rol){
            $this->id_rol = $id_rol;
            $this->rol = $rol;
        }

        function getId_rol(){
            return $this->id_rol;
        }

        function setId_rol($id_rol){
            $this->id_rol = $id_rol;
        }


        function getRol(){
            return $this->rol;
        }
        
        function setRol($rol){
            $this->rol = $rol;
        }

        function getEstado(){
            return $this->estado;
        }

        function setEstado($estado){
            $this->estado = $estado;
        }


    }


?>