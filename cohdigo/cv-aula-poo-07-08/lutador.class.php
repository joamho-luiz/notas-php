<?php
    class Lutador{

        private $nome;
        private $vitohria;
        private $derrota;
        private $empates;

        public function apresentar(){
            var_dump($this);
        }

        public function __construct($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getVitohria(){
            return $this->vitohria;
        }
        public function getDerrota(){
            return $this->derrota;
        }
        public function getEmpate(){
            return $this->empate;
        }

        public function setNome($x){
            $this->nome = $x;
        }
        public function setVitohria($x){
            $this->vitohria += $x;
        }
        public function setDerrota($x){
            $this->derrota += $x;
        }
        public function setEmpate($x){
            $this->empates += $x;
        }
    }
?>
