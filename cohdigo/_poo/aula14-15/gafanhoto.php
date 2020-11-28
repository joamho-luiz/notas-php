<?php
    require_once "pessoas.php";

    class Gafanhoto extends Pessoa{
        private $login;
        private $totalAssistido;

        public function assistirMaisUm(){
            $this->totalAssistido++;
        }

        public function __construct($nome, $idade, $gehhenero, $l){
            parent::__construct($nome, $idade, $gehhenero);
            $this->login = $l;
            $this->totalAssistido = 0;
        }
    }
?>
