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

                $c1 = new Caneta;

                $c1->cor = "Azul";
                //$c1->ponta = 0.5;
                //$c1->tampada = false;
                $c1->tampar();
                $c1->rabiscar();
                $c1->testar();

                var_dump($c1);
            ?>
        </pre>
    </body>
</html>
