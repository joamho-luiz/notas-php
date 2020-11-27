<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $n1 = isset($_GET["n1"])?$_GET["n1"]:"0";
            $n3 = isset($_GET["n2"])?$_GET["n2"]:"0";
            $m = ($n1 + $n3) / 2;

            if($m < 5){
                $res = "REPROVADO";
            }elseif($m >=5 && $m < 7){
                $res = " em RECUPERAÇÃO";
            }else{
                $res = "APROVADO";
            }

            echo "A media entre $n1 e $n3 é igual a $m";
            echo "<br />Situação do alun: $res";
        ?>

        <a href="env.html"><b>Voltar</b></a>
    </body>
</html>
