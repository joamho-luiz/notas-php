<?php
    class ContaBanco{
        protected $tipo;
        public $dono;
        private $saldo;
        private $status;

        public function __construct(){
            $this->setstatus(false);
            $this->setsaldo(0);
            echo "Criada<br />";
        }

        public function abrirConta($t){
            $this->settipo($t);
            $this->setstatus(true);
            if($t == "CC"){
                $this->setsaldo(50);
            }elseif ($t == "CP") {
                $this->setsaldo(150);
            }
        }

        public function fecharConta(){
            if ($this->getsaldo() > 0) {
                echo "Não dá, Ainda tem credito.";
            }elseif($this->getsaldo() < 0){
                echo "Não dá, Ainda tem debito.";
            }else {
                echo "Blz, Conta Fechada";
            }
        }

        public function depositar($v){
            if ($this->getstatus()) {
                $this->setsaldo(getsaldo() + $v);
            }else {
                echo "Conta fechada";
            }
        }

        public function sacar($v){
            if ($this->getstatus()) {
                if ($this->getsaldo() > $v) {
                    $this->setsaldo($this->getsaldo() - $v);
                }else {
                    echo "Saldo Insuficiente.";
                }
            }else {
                echo "Esta conta está fechada.";
            }
        }

        // GETTERS AND SETTERS

        public function gettipo(){
            return $this->tipo;
        }
        public function settipo($n){
            $this->tipo = $n;
        }

        public function getdono(){
            return $this->dono;
        }
        public function setdono($n){
            $this->dono = $n;
        }

        public function getsaldo(){
            return $this->saldo;
        }
        public function setsaldo($n){
            $this->saldo += $n;
        }

        public function getstatus(){
            return $this->status;
        }
        public function setstatus($n){
            $this->status = $n;
        }
    }
?>
