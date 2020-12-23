<?php
    require_once "pessoa.php";

    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function cancelarMatricula(){
            echo "Matricula Cancelada.";
        }

        //sobreescrevendo metodo
        public function oQueSou(){
            echo "Um aluno.";
        }
    }
?>
