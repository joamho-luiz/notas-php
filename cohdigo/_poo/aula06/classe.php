<?php
    require_once "interface.php";

    class ControleRemoto implements Controlador{
        private $ligado;

        public function __construct(){
            $ligado = false;
        }

        //sobres escrevendo métodos da interface
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            var_dump($this);
        }
        public function fecharMenu(){
            echo "Menu fechado";
        }

        public function getLigado(){
            return $this->ligado;
        }
        public function setLigado($c){
            if($c == false){
                $this->ligado = false;
            }elseif($c == true){
                $thsi->ligado = true;
            }
        }
    }
?>
