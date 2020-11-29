Fundamentais
***
<br/>
 
# Memoria

<br/>

## Variáveis

`$nome = "João";`

## Variáveis referenciadas

Qualquer alteração em b afeta a.  

`$a = &$b;`

## Variáveis com nome variável

Nomear variável a partir do valor de outra variável. 

`$a = "b";` `$$a = "c";` &nbsp; &nbsp; _O nome da variável que tem o valor “c” se chama b._

## Vetores

* Definir um vetor  

`$n = array(2,5,8);`

* Atribuir valor a um elemento do vetor

    - `$n[0] = 7;` - colocar o valor '7' no índice '0'.

    - `$a[] = 4;` - colocar o valor '4' no próximo índice vago.

* Ver um vetor

`print_r($vet);`

* Preencher um vetor em passos

`$c = range(5,20,5);` (de 5 até 20 pulando de 5 em 5.) `$c = array (5, 10, 15, 20)`

### Usar índices determinados

```php
$cadastro = array(
    "nome" => "Ana", 
    "idade => 23
);
```
 
### Percorre um vetor 

Para cada **_elemento_** do **vetor** `$vet` coloque o **índice** em `$ind` e o **valor** em `$val`.

```php
foreach ($vet as $ind => $val) {
    echo "O índice $ind tem o valor $val";
}
```

<br/>

## Tipo de Dados (Tipagem)

Php não trabalha com tipagem.

<br/>

***
# Operadores

## Atribuição

#### `=`

## Concatenação

#### `.`

* Auto concatenação 	
```php
$a .= $b
```

* Inserção de variável em strings
```php
echo "$nome tem $idade anos";
```

## Aritméticos

`+` `-` ` *` ` /` ` %` (Resto da divisão inteira)

* Auto atribuição      `$n += 2`  

* Operador de Incremento        `$n++`

* Operador de Decremento        `$n--`

## Relacionais

`>` `<` `>=` `<=` `==` ( `!=` ou `<>` )     

* Inversor `$a =! $b`  

* Idêntico `$a === $b`

## Lógicos

`!` (Negação) `&&` (Conjunção) `||` (Disjunção)  

(Esta é a ordem de execução (precedência)).

## Ternário		

>$n = **condição** `?` valor para **verdadeiro** `:` valor para **falso**

## De Coalescência

$n = `$_GET[`"name"`]` `??` "valor se não for passado nada";