<?php
class votos{
    private $id_voto;
    private $dui_votante;
    private $id_munici;
    private $id_junta;
    private $id_partido;
    private $fecha_creacion;
    private $fecha_modificacion;
    private $estado;

    function __construct($id_voto,$dui_votante,$id_munici,$id_junta,$id_partido,$fecha_creacion,$fecha_modificacion,$estado){
        $this->id_voto=$id_voto;
        $this->dui_votante=$dui_votante;
        $this->id_munici=$id_munici;
        $this->id_junta=$id_junta;
        $this->id_partido=$id_partido;
        $this->fecha_creacion=$fecha_creacion;
        $this->fecha_modificacion=$fecha_modificacion;
        $this->estado=$estado;
    }
    function getId_voto(){
        return $this->id_voto;
    }
    function setId_voto($id_voto){
        $this->id_voto=$id_voto;
    }
    function getDuivotante(){
        return $this->dui_votante;
    }
    function setDuivotante($dui_votante){
        $this->dui_votante=$dui_votante;
    }
    function getId_munici(){
        return $this->id_munici;
    }
    function setId_munici($id_munici){
        $this->id_munici=$id_munici;
    }
    function getId_junta(){
        return $this->id_junta;
    }
    function setId_junta($id_junta){
        $this->id_junta=$id_junta;
    }
    function getId_partido(){
        return $this->id_partido;
    }
    function setId_partido($id_partido){
        $this->id_partido=$id_partido;
    }
    function getFecha_creacion(){
        return $this->fecha_creacion;
    }
    function setFecha_creacion($fecha_creacion){
        $this->fecha_creacion=$fecha_creacion;
    }
    function getFecha_modificacion(){
        return $this->fecha_modificacion;
    }
    function setFecha_modificacion($fecha_modificacion){
        $this->fecha_modificacion=$fecha_modificacion;
    }
    function getEstado(){
        return $this->estado;
    }
    function setEstado($estado){
        $this->estado=$estado;
    }
}
?>