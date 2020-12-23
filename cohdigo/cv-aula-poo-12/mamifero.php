<?php
    require_once "animal.php";

    class Mamifero extends Animal{
        private $corDoPelo;

        public function locomover(){
            echo "Correndo";
        }
        public function alimentar(){
            echo "Mamando";
        }
        public function emitirSom(){
            echo "Som de mamifero";
        }
    }
?>
