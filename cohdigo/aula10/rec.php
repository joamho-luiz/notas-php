<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $num = isset($_GET["n"])?$_GET["n"]:0;
            $opr = isset($_GET["o"])?$_GET["o"]:1;

            switch ($opr) {
                case 1: $r = $num * 2; break;
                case 2: $r = $num; break;
                case 3: $r = $num ^ 0.5;
            }

            echo "O resultado é $r";
        ?>

        <a href="env.html"><b>Voltar</b></a>
    </body>
</html>
