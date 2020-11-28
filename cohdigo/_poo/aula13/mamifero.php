<?php
    require_once "animal.php";

    class Mamifero extends Animal{
        private $corDoPelo;

        public function emitirSom(){
            echo "<p>
            Som de mamífero.
            </p>";
        }
    }
?>
