<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style> body{font-size: 20pt; line-height: 40px;}</style>
    </head>
    <body>
        <?php
            echo "OPERADORES RELACIONAIS";
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "<br /> n1: $n1 e n2: $n2";
            $r = ($tipo == 1)?$n1+$n2:$n1*$n2;
            echo "<br />O resultado é: $r";
            echo "<br />$n1 é identico a $n2? ". (($n1 === $n2)?"SIM":"NÃO");

            echo "<br /><br  />OPERADORES LOGICOS";
            $ano = $_GET["i"];
            $id = 2018 - $ano;
            echo "<br />Fulano ". (($id>=18 && $id<65)?"é": "não é").
            " obrigado a votar ". ((($id>=16 && $id <18) || $id>=65)?"mas tem voto facutativo":"");
        ?>
    </body>
</html>
