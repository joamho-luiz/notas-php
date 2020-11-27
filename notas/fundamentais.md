Variáveis

$nome = "João";
$idade = 20;
echo $nome. " tem ". $idade. " anos! <br/>";
echo "$nome tem $idade";

Variáveis referenciadas

Qualquer alteração em b afeta a 	$a = &$b

Variáveis de variáveis

Nomear variável a partir do valor de outra variável. O nome da variável que tem o valor “c” se chama b.

$a = "b"        $$a = "c"

Operadores Aritméticos

(java)

Operadores de Atribuição

(Java) 		

Concatenação	$a = $a . $b    $a .= $b

Operadores Especiais

$v1 = 4,5;
$v2 = -2;
echo "Potência de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
// valor absoluto abs($v2);
// raiz quadrada sqrt($v1)
// valor inteiro intVal($v1);
// arredondamento round($v1); ~~ ceil ↑    floor ↓
// formatação de n° number_format($v1, 2, ",", "."); ~~ <,>separar centavos <.>separa milhar

Operadores Relacionais

(Java) 

Diferente $a <> $ b   $a != $b		
Inversor $a = ! $b		
Idêntico $a === $b

Operadores de Incremento

(Java)

Operador Ternário		

Expressão ? verdadeiro : falso	
$a > $b  ?  $a  :  $b	

Operador de Coalescência

$n = $_GET["num"] ?? "Nenhum";

Operadores Lógicos

and &&	or ||           xor		!