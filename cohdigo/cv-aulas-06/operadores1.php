<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style> body{font-size: 20pt; line-height: 40px;}</style>
    </head>
    <body>
        <?php
            $precco = $_GET["p"];
            echo "O preço do produto é R$: ". number_format($precco, 2, ",", ".");
            echo "<br />Com acrecimo temos R$: ". number_format($precco *= 1.1, 2, ",", ".");
            $precco = $_GET["p"];
            echo "<br />Com descontamos temos R$: ". number_format($precco *= 0.9, 2, ",", ".");

            echo "<br /><br />DECREMENTO E ENCREMENTO";
            $ano = $_GET["aa"];
            echo "<br />Ano atual: $ano";
            echo "<br />Ano passado: ". --$ano;
            echo "<br />Ano que vem: ". $ano += 2;

            echo "<br /><br />VARIÁVEIS REFERENCIADAS";
            $a = 3;
            $b = &$a;
            $b = 8;
            echo "<br />A: $a e B: $b";

            echo "<br /><br />VARIÁVEIS VARIÁVEIS";
            $curso = "curso_em_vihdeo";
            $$curso = "PHP";
            echo "<br />1: $curso <br />2: ". $curso_em_video;
        ?>
    </body>
</html>
