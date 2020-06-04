<?php
    
    class PartidoPolitico{
        private $id_partido;
        private $nombrePartido;
        private $nombreCandidato;
        private $fotoBanderaPartido;
        private $fotoCandidato;
        private $fechaCreacion;
        private $fechaModificacion;
        private $estado;

        function __construct($id_partido,$nombrePartido,$nombreCandidato,$fotoBanderaPartido,
        $fotoCandidato,$fechaCreacion,$fechaModificacion,$estado){
            $this->id_partido = $id_partido;
            $this->nombrePartido = $nombrePartido;
            $this->nombreCandidato = $nombreCandidato;
            $this->fotoBanderaPartido = $fotoBanderaPartido;
            $this->fotoCandidato = $fotoCandidato;
            $this->fechaCreacion = $fechaCreacion;
            $this->fechaModificacion = $fechaModificacion;
            $this->estado = $estado;
        }

        public function getId_partido(){
            return $this->id_partido;
        }

        public function getNombrePartido(){
            return $this->nombrePartido;
        }

        public function getNombreCandidato(){
            return $this->nombreCandidato;
        }

        public function getFotoBanderaPartido(){
            return $this->fotoBanderaPartido;
        }

        public function getFotoCandidato(){
            return $this->fotoCandidato;
        }

        public function getFechaCreacion(){
            return $this->fechaCreacion;
        }

        public function getFechaModificacion(){
            return $this->fechaModificacion;
        }

        public function getEstado(){
            return $this->estado;
        }

    }

?>