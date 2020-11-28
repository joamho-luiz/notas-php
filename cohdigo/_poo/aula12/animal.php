<?php
    abstract class Animal{
        private $peso;
        private $idade;
        private $membros;

        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();
    }
?>
