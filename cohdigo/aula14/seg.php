<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function soma(){
                $p = func_get_args();
                $f = func_num_args();
                $s = 0;
                for($i=0; $i < $f; $i++){
                    $s += $p[$i];
                }
                return $s;
            }

            $r = soma(2,3,5, 8, 9);
            echo "A soma dos valores é: $r";
        ?>
    </body>
</html>
