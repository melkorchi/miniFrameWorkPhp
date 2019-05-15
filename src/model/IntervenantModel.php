<?php

    class IntervenantModel extends UserModel {

        private $name;
        private $matiers;
        private $couleurDePeau;
        private $origin;
        private $sexe;

        function __construct(string $name, string $colorSkin = "vert", string $origin = "Allemagne", string $sexe = "Femme", string $email = "mek@gmail.com", string $pass = "mek")
        {
            parent::__construct($email, $pass);
            $this->setName($name);
            $this->setCouleurDePeau($colorSkin);
            $this->setOrigin($origin);
            $this->setSexe($sexe);
        }

        /**
         * Get the value of name
         */ 
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName(string $name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of matiers
         */ 
        public function getMatiers(): Array
        {
                return $this->matiers;
        }

        /**
         * Set the value of matiers
         *
         * @return  self
         */ 
        public function setMatiers(string $matiers)
        {
                array_push($this->matiers, $matiers);

                return $this;
        }

        /**
         * Get the value of couleurDePeau
         */ 
        public function getCouleurDePeau(): string
        {
                return $this->couleurDePeau;
        }

        /**
         * Set the value of couleurDePeau
         *
         * @return  self
         */ 
        public function setCouleurDePeau(string $couleurDePeau)
        {
                $this->couleurDePeau = $couleurDePeau;

                return $this;
        }

        /**
         * Get the value of origin
         */ 
        public function getOrigin(): string
        {
                return $this->origin;
        }

        /**
         * Set the value of origin
         *
         * @return  self
         */ 
        public function setOrigin(string $origin)
        {
                $this->origin = $origin;

                return $this;
        }

        /**
         * Get the value of sexe
         */ 
        public function getSexe():string
        {
                return $this->sexe;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setSexe(string $sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * 
         */
        public function show(){
            echo "Nom:".$this->getName()."<br>";
            echo "Sexe:".$this->getSexe()."<br>";
        } 
    }