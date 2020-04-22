<?php

    include_once("usuario.php");

    class Paciente extends Usuario{


        //  ---------  ATRIBUTOS  ---------

        protected $edad;

        protected $sexo;
        protected $direccion;

        protected $localidad;
        protected $celular;
        protected $numeroDeSocio;

        protected $obraSocial;
        protected $grupoFamiliar;


        //  ---------  METODOS  ---------


        // Gettes


            public function getEdad() {
                return $this->edad;
            }


            public function getSexo() {
                return $this->sexo;
            }

            public function getDireccion() {
                return $this->direccion;
            }

            public function getLocalidad() {
                return $this->localidad;
            }

            public function getCelular() {
                return $this->celular;
            }

            public function getnumeroDeSocio() {
                return $this->numeroDeSocio;
            }
            public function getObraSocial() {
                return $this->obraSocial;
            }
            // public function getGrupoFamiliar() {
            //     return $this->grupoFamiliar;
            // }





        //Setters


        public function setEdad($edad) {
            $this->edad = $edad;
        }





        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }



        public function setLocalidad($localidad) {
            $this->localidad = $localidad;
        }
        public function setCelular($celular) {
            $this->celular = $celular;
        }
        public function setNumeroDeSocio($numeroDeSocio) {
            $this->numeroDeSocio = $numeroDeSocio;
        }




        public function setObraSocial($obraSocial) {
            $this->obraSocial = $obraSocial;
        }

        // public function set($grupoFamiliar) {
        //     $this->grupoFamiliar = $grupoFamiliar;
        // }





    }


?>