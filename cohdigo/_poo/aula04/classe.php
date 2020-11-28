<?php
    class Caneta{
        private $modelo;
        private $ponta;
        private $cor;

        public function __construct($c){
            $this->ponta = 0.5;  // -> vai ter/fazer
            $this->cor = $c;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>
