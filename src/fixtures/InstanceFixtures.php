<?php

    class InstanceFixtures {
        
        private $arrayIntervenant = ["etudiant" => [], "intervenant" => []];

        public function __construct(int $number = 1) {
            for ($i=0;$i<$number;$i++) {
                array_push($this->arrayIntervenant["intervenant"], $this->dataSetIntervenant());
                array_push($this->arrayIntervenant["etudiant"], $this->dataSetEtudiant());
            }
        }

        private function dataSetIntervenant(): IntervenantModel {
            $names = ['Zoubida', 'Sylvestre', 'Zebda', 'Kevin'];
            $couleurDePeau = ['vert', 'noir', 'blanche', 'bleu'];
            $origin = ['Maroc', 'France', 'Allemagne', 'Inde'];
            $sexe = ['Homme', 'Femme'];

            return new IntervenantModel(
                $names[rand(0,3)],
                $couleurDePeau[rand(0,3)],
                $origin[rand(0,3)],
                $sexe[rand(0,1)]
            );
        }

        private function dataSetEtudiant(): EtudiantModel {
            $names = ['Zoubida', 'Sylvestre', 'Zebda', 'Kevin'];
            $class = ['Master I', 'Master II', 'Licence', 'BTS'];

            return new EtudiantModel(
                $names[rand(0,3)],
                $class[rand(0,3)]
            );
        }

         /**
         * @return array
         */
        public function getArrayIntervenant(): array
        {
            return $this->arrayIntervenant;
        }

        /**
         * @param array $arrayIntervenant
         */
        public function setArrayIntervenant(array $arrayIntervenant)
        {
            $this->arrayIntervenant = $arrayIntervenant;
        }

    }