<?php
    require_once "pessoa.php";
    require_once "interface.php";

    class Livro implements Publicaccamho{
        private $titulo;
        private $autor;
        private $totPahginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhar(){
            echo "O livro: $this->titulo foi escrito por: $this->autor";
            echo "<br />E está sendo lido por: ". $this->leitor->getNome();
        }

        public function __construct($t, $a, $n, $l){
            $this->titulo = $t;
            $this->autor = $a;
            $this->totPahginas = $n;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $l;
        }

        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhar($pp){
            $this->pagAtual = $pp;
        }
        public function avanccarPag(){
            $this->pagAtual++;
        }
        public function voltarPag(){
            $this->pagAtual--;
        }
    }
?>
