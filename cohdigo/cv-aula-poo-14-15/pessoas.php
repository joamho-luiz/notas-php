<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $gehhenero;
        protected $experiencia;

        public function ganharExp($n){
            $this->experiencia += $n;
        }

        public function __construct($n, $i, $g){
            $this->nome = $n;
            $this->idade = $i;
            $this->gehhenero = $g;
            $this->experiencia = 0;
        }
    }
?>
