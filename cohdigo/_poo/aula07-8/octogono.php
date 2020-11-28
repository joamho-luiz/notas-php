<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Evento de Luta</title>
        <style> h3{ font-size: 20pt; color: #ff2222;}</style>
    </head>
    <body>
        <pre>
            <?php
                require_once "lutador.class.php";
                require_once "luta.class.php";

                // Inscrever os lutadores:
                $l1 = new Lutador("Cabano");
                $l2 = new Lutador("Julio");

                // Declar um combate:
                $f = new Luta($l1, $l2);

                // Fazer as lutas:
                for ($i=1; $i <=10 ; $i++) {
                    $f->lutar();
                }
                echo "<h3><br /><br /> O Resultado é <br /><br /></h3>";
                $l1->apresentar();
                echo "<br /><br />";
                $l2->apresentar();
            ?>
        </pre>
    </body>
</html>
