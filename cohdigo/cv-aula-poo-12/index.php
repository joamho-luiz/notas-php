<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once "mamifero.php";
                require_once "ave.php";

                $m = new Mamifero;
                $a = new Ave;

                $m->alimentar();
                echo "<br />";
                $a->alimentar();
            ?>
        </pre>
    </body>
</html>
