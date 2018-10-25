<?php
    class Personnage {
        private $_vie = 5;
        private $_attaque = 10;
        private $_nom;

        public function getNom(){
            return $this->_nom;
        }

        public function getAttaque(){
            return $this->_attaque;
        }

        public function getVie(){
            return $this->_vie;
        }

        public function crier() {
            return 'Ahhhhhhhhhhh.<br>';
        }

        public function regenerer($vie = null) {
            if (is_null($vie)) {
                $this->_vie = 100;
            } else {
                $this->_vie += $vie;
            }

        }

        public function __construct($nom) {
            $this->_nom = $nom;
        }

        public function mort() {
            return $this->_vie <= 0;
        }

        private function lifeNoNegatif() {
            if ($this->_vie < 0) {
                return $this->_vie = 0;
            }
        }

        public function attaque($cible) {
            // attaquant = $this 
            // cible = $cible
            var_dump ($cible->_vie -= $this->_attaque);
            var_dump ($cible->lifeNoNegatif()); 
            // ou
            // if ($cible->_vie < 0) {
            //     return $cible->_vie = 0;
            // }
              
           
        }
    }