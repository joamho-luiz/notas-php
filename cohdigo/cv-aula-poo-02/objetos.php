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

                $c1 -> cor = "Azul";
                $c1 -> ponta = 0.5;
                $c1 -> tampada = false;
                $c1 -> tampar();
                $c1 -> rabiscar();

                var_dump($c1);

                echo "<br />";

                $d2 = new Caneta;

                $d2 -> cor = "Verde";
                $d2 -> carga = 50;
                $d2 -> tampar();

                var_dump($d2);
            ?>
        </pre>
    </body>
</html>
