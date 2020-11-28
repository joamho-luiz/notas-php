<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once "pessoa.php";
                require_once "aluno.php";
                require_once "professore.php";
                require_once "Visitante.php";

                $b = new Aluno;
                $b->oQueSou();

                var_dump($b);
            ?>
        </pre>
    </body>
</html>
