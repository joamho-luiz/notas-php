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
                require_once "livro.php";

                $p[0] = new Pessoa("Jbalvin", 29, "M");
                $p[1] = new Pessoa("Nicky", 26, "M");

                $l[0] = new Livro("Uma breve história", "João Arcanez", 120, $p[1]);
                $l[1] = new Livro("Las venas abiertas", "Pierre de Monez", 60, $p[1]);
                $l[2] = new Livro("Brasil uma biografia", "Marina Santa Elena", 89, $p[0]);

                //$l[1]->detalhar();

                $l[2]->folhar(70);
                $l[2]->voltarPag();

                var_dump($l[0]);
            ?>
        </pre>
    </body>
</html>
