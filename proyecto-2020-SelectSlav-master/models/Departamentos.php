<?php
    class Departamentos{

        private $id_dept;
        private $nombre;
        private $fecha_creacion;
        private $fecha_modificacion;
        private $estado;


        function __construct($id_dept, $nombre,$fecha_creacion, $fecha_modificacion, $estado){

            $this->id_dept = $id_dept;
            $this->nombre = $nombre;
            $this->fecha_creacion = $fecha_creacion;
            $this->fecha_modificacion = $fecha_modificacion;
            $this->estado = $estado;
        }

        

        function getId_dept(){
            return $this->id_dept;
        }
        function setId_dept($id_dept){
            $this->id_dept = $id_dept;
        }
        
        function getNombre(){
            return $this->nombre;
        }
        function setNombre($nombre){
            $this->nombre = $nombre;
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