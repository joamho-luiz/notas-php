Orientação a Objeto
***
<br/>
 
# > > > > > > &nbsp; &nbsp; Básico &nbsp; &nbsp; < < < < < <

# Classe

```php
class Caneta {
        // atributos
        var $cor;  		 
        var $tampada;

        // métodos
        function tampar() {     	                
                $this->tampada = true;        
        }
}
```

* `$this->'atributo/atributo'`   -  this faz referência ao objeto estanciado.

# Objeto

```php
$c1 = new Caneta;                // instanciar

$c1->tampada = false;	        // modificar atributo

$c1->tampar();                 // chamar método
```

# Método Construtor

Método especial de uma classe. Quando instanciado um objeto dessa classe é acionado o método construtor.
```php
public function __construct($cor){                // Dois subtraços 
        $this->ponta = 0.5;                    // -> vai ter/fazer
        $this->cor = $cor;
}
```

# Atributo do tipo Objeto

Usar objetos de uma classe A como atributos de uma classe B. Com isso posso alterar/chamar seus atributos e métodos dentro de outra classe.

```php
// Inscrever os lutadores:
        $lutador1= new Lutador("Cabano");
        $lutador2 = new Lutador("Julio");
 
// Declarar um combate:
        $lutaA = new Luta($lutador1, $lutador2);
```

<br/><br/> 

# > > > > > > &nbsp; &nbsp; Encapsulamento &nbsp; &nbsp; < < < < < <

# Visibilidade

Para restringir o acesso a apenas * basta:

* `public`  - objetos e classes filhas.

* `private`  - nem objeto, nem classe filhas.

* `protected` - apenas classe filhas.

# Métodos Getters e Setters

Quando a certo atributo não pode ser modificado de qualquer forma e ou a qualquer momento faz se necessário torna-lo privado e permitir o seu acesso apenas por métodos públicos (Getters e Setters) que terão o controle se tal atributo pode ser alterado e como ou se pode ser repassado e como. É de bom tom criar todos os métodos Getter e Setter para todos os atributos.

* `Getter` - quem irar passar o valor de algum atributo.

* `Setter` - quem irar modificar o valor de algum atributo.

# Interface

Se implemento uma interface fico obrigado a desenvolver todos seus métodos.
```php
interface Controlador{                                  // Interface.
        public function ligar();
}
 
class ControleRemoto implements Controlador{            // Classe que implementa a Interface.
        var $ligado;

        // IMPLEMENTAÇÃO DO MÉTODO
        public function ligar(){
                $this->$ligado = true;
        }
}
```

<br/><br/>

# > > > > > > &nbsp; &nbsp; Herança &nbsp; &nbsp; < < < < < <

```php
class Aluno extends Pessoas {
        // Aluno tem todos (talvez nem todos) os tributos e métodos de Pessoas.
}
```

## Tipos de Herança

* `abstract class Pessoa {` - não pode ser instanciada só pode ser mãe.

* `final class Bolsista {` - não pode ser herdada.

* `final function minhaEscola() {` - não pode ser sobrescrito.

* `abstract function oQueSou();` - é declarado na classe mãe, mas seu conteúdo só é definido nas classe filhas.  
(Só pode ser colocado dentro de uma interface ou de uma classe abstrata, quando uma classe implementa ou herda outra classe com métodos abstratos se obriga a desenvolver-los).

<br/><br/>

# > > > > > > &nbsp; &nbsp; Polimorfismo &nbsp; &nbsp; < < < < < <

\* _**Assinatura**: parâmetro (tipos e quantidades)_


## Sobreposição

Rescrever um método herdado mantendo seu nome e assinatura, porém alterando sua funcionalidade.

No PHP não uma palavra como _`@sobrescrito`_ para identificar uma sobreposição.

```php
class Ave {
        function locomover($velocidade) {
                if ($velocidade == 'rahpido') { echo"voa"; }
                if ($velocidade == 'lento') { echo"caminha"; }
        }
}

class Galinha {
        function locomover($velocidade) {
                echo "Só caminha :(";
        }
}
```

## Sobrecarga

O PHP não suporta sobrecarga de métodos.