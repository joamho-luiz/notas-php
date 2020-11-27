<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $nome = "João";
            $idade = 20;
            echo $nome. " tem ". $idade. " anos! <br/>";
            echo "$nome tem $idade <br/> <br/>";

            echo "TESTANDO SOMA <br /><br />";
            $a = $_GET["c"];
            $b = $_GET["d"];
            echo "Temos o número a: <b>$a</b> e o número b: <b>$b</b>.";
            echo "<br />A soma é: ". ($a + $b);
            echo "<br />A subtração é: ". ($a - $b);
            echo "<br />A divisão é ". ($a / $b);
            echo "<br />E o resto da divisão é ". ($a % $b);
            echo "<br />A multiplicação é ". ($a * $b);

            echo "<br /><br />FUNÇÕES ARITIMÉTICAS";
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<br /><br />V1 = $v1 e V2 = $v2";
            echo "<br />Valor absoluto de v2 é: " . abs($v2);
            echo "<br />Potencia de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
            echo "<br />A raiz de $v1 é: ". sqrt($v1);
            echo "<br />O valor arredondado de $v1 é: ". round($v1); //ceil ↑    floor ↓
            echo "<br />O valor de $v1 é ". intVal($v1);
            echo "<br />O valor de $v1 em moedas é R$: ". number_format($v1, 2, ",", "."); // ,separar centavos .separa milhar
        ?>
    </body>
</html>
