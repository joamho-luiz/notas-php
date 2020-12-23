<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function soma($a, $b){
                $s = $a + $b;
                echo "A soma é $s";
            }

            function sub($a, $b){
                return $a - $b;
            }

            soma(3, 4);

            echo "<br />E a subtração é ". sub(3, 4);
        ?>
    </body>
</html>
