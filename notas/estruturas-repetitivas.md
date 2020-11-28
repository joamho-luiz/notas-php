Estrutura de repetições
***

Repetições, laços ou interações. 

<br/>
 
# Teste lógico no ínicio

```php
$a = 1;

while ($a <= 10) {
    echo "Passo $a";
    $a++;
}
```

<br/>
 
# Teste lógico no final

```php
$a = 1;

do {
    echo "Passo $a";
    $a++;
} while ($a <= 10);
```

<br/>
 
# Inicialização + Teste lógico no início + Incrementação no início

```php
for ($a=0; $a <= 10; $a++) { 
    echo "Passo $a";
}
```

<br/>
 
# Repetição útil para Vetores

_"Para percorrer arrays"_

Para cada **_elemento_** do **vetor** `$vet` coloque o **índice** em `$ind` e o **valor** em `$val`.
```php
foreach ($vet as $ind => $val) {
    echo "O índice $ind tem o valor $val";
}
```

# Controle de loop

* `Break;` sai do loop de repetição.	

* `Continue;` ignora o resto código passa para próxima repetição.