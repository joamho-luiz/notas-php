<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $num = isset($_GET["n"])?$_GET["n"]:0;
            $fat = 1;

            do {
                $fat = $num * $fat;
                $num--;
            } while ($num > 0);

            echo "$fat";
        ?>
    </body>
</html>
