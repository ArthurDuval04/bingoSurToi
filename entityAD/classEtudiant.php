<?php 
    class Etudiant {
       
    
        private $idetu;
        private $prenometu;
        private $nometu;
        public function __construct($id, $prenom, $nom) {
            $this->idetu=$id;
            $this->prenometu=$prenom ;
            $this->nometu=$nom;
           
        }


        public function getPrenom() {
            return $this->prenometu;
        }

        public function getNom() {
            return $this->nometu;
        }
        public function getId() {
            return $this->idetu;
        }


        public function setPrenom($leprenom) {

            $this->prenometu = $leprenom;
            
        }
        public function setNom($lenom) {

            $this->nometu = $lenom;
            
        }
        public function setId($lid) {

            $this->idetu = $lid;
            
        }
    

    }


?>