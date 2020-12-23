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

                $a = new Pessoa;
                $b = new Aluno;
                $c = new Professor;

                $a->setNome("Harry");
                $b->setNome("Loui");
                $c->setNome("Zayn");
            ?>
        </pre>
    </body>
</html>
