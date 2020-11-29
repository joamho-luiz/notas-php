<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style >
            body{
                font-size: 15pt;
            }
        </style>
    </head>
    <body>
        <?php
            $c = 1;
            do {
                $d = $c * 7;
                echo $c. " x 7 = $d<br />";
                $c++;
            } while ($c <= 10);
        ?>
    </body>
</html>
