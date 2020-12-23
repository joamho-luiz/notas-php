<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversário(){
            $this->idade++;
        }

        public function setNome($nm){
            $this->nomme = $nm;
        }
    }
?>
