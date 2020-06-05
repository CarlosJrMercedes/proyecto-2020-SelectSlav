<?php

class juntaReceptora
{
    private $id_junta;
    private $nombre;
    private $id_centro;
    private $cNombre;
    private $fecha_creacion;
    private $fecha_modificacion;
    private $estado;

    function __construct($id_junta,$nombre,$id_centro,$cNombre,$fecha_creacion,
    $fecha_modificacion,$estado){
        $this->id_junta = $id_junta;
        $this->nombre = $nombre;
        $this->id_centro = $id_centro;
        $this->cNombre = $cNombre;
        $this->fecha_creacion = $fecha_creacion;
        $this->fecha_modificacion = $fecha_modificacion;
        $this->estado = $estado;
    }

    function getId_junta(){
        return $this->id_junta;
    }
    function setId_junta($id_junta){
        $this->id_junta = $id_junta;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getId_centro(){
        return $this->id_centro;
    }
    function setId_centro($id_centro){
        $this->id_centro = $id_centro;
    }
    function getcNombre(){
        return $this->cNombre;
    }
    function setcNombre($cNombre){
        $this->cNombre = $cNombre;
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