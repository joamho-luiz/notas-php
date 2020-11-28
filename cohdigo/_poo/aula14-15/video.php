<?php
    require_once "accomhes-videos.php";

    class Video implements AccomhesVideos{
        private $titulo, $avaliaccamho, $visualisaccomhes, $curtidas, $reproduzindo;

        public function __construct($tit){
            $this->titulo = $tit;
            $this->avaliaccamho = 1;
            $this->visualisaccomhes = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function play(){
            $this->curtidas++;
        }
        public function pause(){
            $this->reproduzindo = false;
        }
        public function like(){
            $this->reproduzindo = true;
        }
    }
?>
