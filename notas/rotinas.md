Rotinas
***
<br/>
 
# Funções

```php
function fun ($parametro_1, $parametro_2) {
    $adiccamho = $parametro_1 + $parametro_2;
    return $adiccamho;
}

$soma = fun (2, 4);
```

# Funções com Parâmetros Dinâmicos

Função que não determina a quantidade de parâmetros.

```php
function mehdia(){
      $p = func_get_args();   # retorna um vetor com todos os parâmetros passados para a função 'mehdia'.
      $f = func_num_args();   # retorna a quantidade de parâmetros repassados.

      $s = 0;

      foreach ($p as $val) {
            $s += $val;
      }

      $mehdia = $s / $f;

      return $mehdia;
}

$med = mehdia(22, 4, 8, ... ,5);
```

# Passagem de Parâmetro por Referência

Entregar uma variável por inteiro não só um valor.
```php
function soma (&$parametro) {        # & marca que se trata de passagem de referência e não de valo.
    $parametro += 2;                # Irar trabalhar com $num
    echo "$parametro";             # >>>>     5      <<<<<
}

$num = 3;
fun ($num);
echo "$num";             # >>>>     5      <<<<<
```