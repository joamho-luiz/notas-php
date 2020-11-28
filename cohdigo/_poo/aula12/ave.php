<?php
    require_once "animal.php";

    class Ave extends Animal{
        private $corDaPena;

        public function locomover(){
            echo "Voando";
        }
        public function alimentar(){
            echo "fruta e inseto";
        }
        public function emitirSom(){
            echo "piu";
        }
    }
?>
