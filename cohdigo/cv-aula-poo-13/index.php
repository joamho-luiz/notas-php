<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "mamifero.php";
            require_once "lobo.php";
            require_once "cachorro.php";

            $m = new Mamifero;
            $l = new Lobo;
            $c = new Cachorro;

            $m->emitirSom();
            $l->emitirSom();
            $c->emitirSom();
        ?>
    </body>
</html>
