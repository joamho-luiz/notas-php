<?php
    require_once "lutador.class.php";

    class Luta{
        private $desafiante;
        private $desafiado;

        public function lutar(){
            $pp = "<br />". $this->desafiante->getNome(). " X ". $this->desafiado->getNome();
            echo "<h2>$pp</h2><br />";
            echo "<h2>Lutem !!!</h2><br />";
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0:
                    echo "Empate";
                    $this->desafiante->setEmpate(1);
                    $this->desafiado->setEmpate(1);
                    break;
                case 1:
                    echo $this->desafiante->getNome(). " Venceu!";
                    $this->desafiante->setVitohria(1);
                    $this->desafiado->setDerrota(1);
                    break;
                case 2:
                    echo $this->desafiado->getNome(). " Venceu!";
                    $this->desafiante->setDerrota(1);
                    $this->desafiado->setVitohria(1);
                    break;
            }
        }

        public function __construct($a, $b){
            $this->desafiante = $a;
            $this->desafiado = $b;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }
        public function getDesafiado(){
            return $this->desafiado;
        }

        public function setDesafiante($y){
            $this->desafiante = $y;
        }
        public function setDesafiado($y){
            $this->desafiado = $y;
        }
    }
?>
