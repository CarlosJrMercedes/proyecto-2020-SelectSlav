<?php 
    class CentroV{

        private $id_centro;
        private $nombre;
        private $id_munici;
        private $direccion;
        private $fecha_creacion;
        private $fecha_modificacion;
        private $estado;


        function __construct($id_centro, $nombre, $id_munici, $direccion,
        $fecha_creacion, $fecha_modificacion, $estado){

            $this->id_centro = $id_centro;
            $this->nombre = $nombre;
            $this->id_munici = $id_munici;
            $this->direccion = $direccion;
            $this->fecha_creacion = $fecha_creacion;
            $this->fecha_modificacion = $fecha_modificacion;
            $this->estado = $estado;
        }
 
        function getId_centro(){
            return $this->id_centro;
        }
        function setId_centro($id_centro){
            $this->id_centro = $id_centro;
        }
        
        function getNombre(){
            return $this->nombre;
        }
        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function getId_munici(){
            return $this->id_munici;
        }
        function setId_munici($id_munici){
            $this->id_munici = $id_munici;
        }
        
        function getDireccion(){
            return $this->direccion;
        }
        function setDireccion($direccion){
            $this->direccion = $direccion;
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