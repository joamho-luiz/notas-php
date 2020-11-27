<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $e = $_GET["n"];

            for ($i=2; $i <= $e ; $i++) {
                /*if ($e%$i <> 0) {
                }elseif () {
                    echo "é primo";
                }else{
                    echo "Não é primo";
                    break;
                }*/

                if ($e%$i == 0 && $e <> $i) {
                    echo "não é";
                    break;
                }elseif ($e == $i) {
                    echo "é";
                }
            }
        ?>
    </body>
</html>
