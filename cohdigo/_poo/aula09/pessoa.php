<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $gehhnero;

        public function fazerAniversahrio(){
            $this->idade++;
        }

        public function __construct($n, $i, $g){
            $this->nome = $n;
            $this->idade = $i;
            $this->gehhnero = $g;
        }

        public function getNome(){
            return $this->nome;
        }
    }
?>
