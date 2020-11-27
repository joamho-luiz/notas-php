Estruturas Seletivas
***
<br/>
 
# Condições Simples		

```php
if ( condição ) {
    # SE VERDADE
}
```
 
<br/>
 
# Condições Composta		

```php
if ( condição ) {
    # SE VERDADE
} else {
    # SE FALSO
}
```

Três possibilidades:  

```php
if ( condição 1 ) {
    # SE 1 VERDADE
} elseif ( condição 2 ) {           # Sem espaço
    # SE 1 FALSO E 2 VERDADE
} else {
    # SE 1 FALSO E 2 FALSO
}
```
 
<br/>
 
# Condições Encadeada		

```php
if ( condição 1 ) {
    if ( condição 2 ) {
        # SE 1 E 2 VERDADE
    }
}
```
 
<br/>
 
# Condição ternária		

`( condição ) ? verdadeiro : falso`
 
<br/>
 
# Condições Aninhadas		

```php
   switch ( expressão ) {
        case valor 1: 
            ação 1
            break;
 
        case valor 2: 
            ação 2
            break;

        default:
            break;
   }
```