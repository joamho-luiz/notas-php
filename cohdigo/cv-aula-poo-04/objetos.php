<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Classe e Objetos</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'classe.php';

                $c1 = new Caneta("Azul");

                $c1->setModelo("big");

                var_dump($c1);
            ?>
        </pre>
    </body>
</html>
