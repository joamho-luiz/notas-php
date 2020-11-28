<?php
    require_once "video.php";
    require_once "gafanhoto.php";

    class Visualisaccamho{
        private $espectador;
        private $filme;

        public function __construct($espectador, $filme){
            $this->espectador = $espectador;
            $this->filme = $filme;
        }
    }
?>
