<?php
    abstract class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversário(){
            $this->idade++;
        }

        public /*final*/ function oQueSou(){ // Para dizer que não pode ser sobreescrito.
            echo "Uma Pessoa";
        }

        public function setNome($nm){
            $this->nome = $nm;
        }
    }
?>
