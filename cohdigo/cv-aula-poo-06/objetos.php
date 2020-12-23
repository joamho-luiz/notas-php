<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "classe.php";

            $c1 = new ControleRemoto;
            $c1->setLigado(false);
            $c1->abrirMenu();
        ?>
    </body>
</html>
