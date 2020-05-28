<?php
    class Municipios{

        private $id_munici;
        private $nombre;
        private $id_dept;
        private $fecha_creacion;
        private $fecha_modificacion;
        private $estado;


        function __construct($id_munici, $nombre, $id_dept,
        $fecha_creacion, $fecha_modificacion, $estado){

            $this->id_munici = $id_munici;
            $this->nombre = $nombre;
            $this->id_dept = $id_dept;
            $this->fecha_creacion = $fecha_creacion;
            $this->fecha_modificacion = $fecha_modificacion;
            $this->estado = $estado;
        }

        

        function getId_munici(){
            return $this->id_munici;
        }
        function setId_munici($id_munici){
            $this->id_munici = $id_munici;
        }
        
        function getNombre(){
            return $this->nombre;
        }
        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function getId_dept(){
            return $this->id_dept;
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