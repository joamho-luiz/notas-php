<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="get" action="parte2.php">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' /> <br />";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
