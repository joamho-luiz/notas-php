<?php
    require_once "pessoa.php";

    class Professor extends Pessoa{
        private $especialidade;
        private $salahrio;

        public function receberAluno($x){
            $this->salahrio += $x;
        }
    }
?>
