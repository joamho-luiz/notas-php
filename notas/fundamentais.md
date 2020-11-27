Fundamentais
***
<br/>
 
# Memoria

<br/>
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


## Variáveis

`$nome = "João";`

## Variáveis referenciadas

Qualquer alteração em b afeta a.  

`$a = &$b`

## Variáveis de variáveis

Nomear variável a partir do valor de outra variável. 

`$a = "b"        $$a = "c"` &nbsp; &nbsp; _O nome da variável que tem o valor “c” se chama b._

## Vetores

### Definir um vetor  

`$n = array(2,5,8);`

### Atribuir valor a um elemento do vetor

`$n[0] = 7;`
 
### Estrutura de repetição útil para trabalhar com vetores  

Para cada elemento do vetor considere ele o valor.

```php 
foreach ($vetor as $key => $valor) {
    # código...
}
```

### Usar valores determinados nos indices

```php
$cadastro = array(
    "nome" => "Ana", 
    "idade => 23
);
```

<br/>
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
<br/>

# Tipo de Dados (Tipagem)

Php não trabalha com tipagem.

<br/>

***
# Operadores

## Atribuição

#### `=`

## Concatenação

### `.`

* Auto concatenação 	
```php
$a .= $b
```

* Inserção de variável em string
```php
echo "$nome tem $idade anos";
```

## Aritméticos

`+` `-` ` *` ` /` ` %` (Resto da divisão inteira)

* Auto atribuição      `$n += 2`  

* Incremento        `$n++`  

* Decremento        `$n--`

## Relacionais

`>` `<` `>=` `<=` `==` ( `!=` ou `<>` )     

Inversor `$a =! $b`  

Idêntico `$a === $b`

## Lógicos

`!` (Negação) `&&` (Conjunção) `||` (Disjunção)  

(Esta é a ordem de execução (precedência)).

## Operador Ternário		

$n = **condição** `?` valor para **verdadeiro** `:` valor para **falso**

## Operador de Coalescência

$n = `$_GET[`"name"`]` `??` "valor se não for passado nada";

## Alguns métodos úteis em matemática

`pow($v, $w)` potencia ( $v<sup> $w</sup> )

`abs($v)` valor absoluto   

`sqrt($v)` raiz quadrada   

`intVal($v)` valor inteiro   

`round($v)` arredondamento. Também: _ceil ( ) floor ( )_  

`number_format($v1, 2, ",", ".")` separação de milhar por . e duas cas decimais por ,