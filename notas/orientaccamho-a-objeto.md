PHP Orientado a Objeto

Classe

class Caneta{       		//classe
        var $cor;  		 //atributo
        var $tampada;
 
        function tampar(){     	 //método
            $this -> tampada = true;
}}

Objeto

require_once 'classe.php';	 //chamar classe
$c1 = new Caneta;		 //declara objeto
$c1 = tampada = false;	 //modificar atributo
$c1 -> tampar();		 //chamar método

Método Construtor

public function __construct($c){
            $this->ponta = 0.5;  // -> vai ter/fazer
            $this->cor = $c;
        }


Interface

interface Controlador{
        public function ligar();
 
class ControleRemoto implements Controlador{

Agregação entre Objetos

Trabalhando com atributos e métodos de outra classe:
$vencedor = rand(0,2);
            switch ($vencedor) {
               case 1:
                    echo $this->desafiante->getNome(). " Venceu!";
                    $this->desafiante->setVitohria(1);
                    $this->desafiado->setDerrota(1);
                    break;


Passando objetos como parâmetros:
// Inscrever os lutadores:
           $l1 = new Lutador("Cabano");
           $l2 = new Lutador("Julio");
 
// Declar um combate:
           $f = new Luta($l1, $l2);

Herança

class ControleRemoto implements Controlador{

Fazer referência a um método de um objeto de um atributo

$this->desafiante->getNome();

Passar objeto para atributo

$a = new Lutador;
$e = new Luta;
 
$e->nome = $a;

Classe abstract

abstract class Pessoa{

Método final

 public final function oQueSou(){ // Para dizer que não pode ser sobreescrito.
    echo "Uma Pessoa";
}
