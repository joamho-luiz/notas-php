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

                $a1 = new ContaBanco;
                $b1 = new ContaBanco;

                $a1->dono = "joão";
                $a1->abrirConta("CC");
                $b1->dono = "leo";
                $b1->abrirConta("CP");                

                var_dump($a1);
                var_dump($b1);
            ?>
        </pre>
    </body>
</html>
