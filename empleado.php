<?php

    class Empleado{

        private $cedula;
        private $nombre;
        private $sueldo;
        private $dias;
        private $hed;
        private $hen;
        private $hedd;
        private $hedn;
        private $basico;
        private $aux_trans;
        private $total_extra;
        private $total_devengado;
        private $salud;
        private $pension;
        private $arl;
        private $icbf;
        private $fondo_solidario;
        private $retefuente;
        private $total_parafiscales;
        private $prima;
        private $vacaciones;
        private $cesantias;
        private $int_cesantias;
        private $total_prestaciones;
        
        public function_construct($cd, $nom, $sueldo, $dias, $hed, $hen, $hedd, $hedn){

            $this->cedula = $cd;
            $this->nombre = $nom;
            $this->sueldo = $sueldo;
            $this->dias = $dias;
            $this->hed = $hed; 
            $this->hen = $hen;
            $this->hedd = $hedd;
            $this->hedn = $hedn;

        }

        public function setCedula($cd){
            $this->cedula = $cd;
        }

        public function getCedula(){
            return $this->cedula;
        }

        public function setNombre($nom){
            $this->nombre = $nom;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setSueldo($sueldo){
            $this->sueldo = $sueldo;
        }

        public function getSueldo(){
            return $this->sueldo;
        }

        public function setDias($dias){
            $this->dias = $dias;
        }

        public function getDias(){
            return $this->dias;
        }

        public function setHed($hed){
            $this->hed = $hed;
        }

        public function getHed(){
            return $this->hed;
        }

        public function setHen($hen){
            $this->hen = $hen;
        }

        public function getHen(){
            return $this->hen;
        }

        public function setHedd($hedd){
            $this->hedd = $hedd;
        }

        public function getHedd(){
            return $this->hedd;
        }

        public function setHedn($hedn){
            $this->hedn = $hedn;
        }

        public function getHedn(){
            return $this->hedn;
        }

    }

?>