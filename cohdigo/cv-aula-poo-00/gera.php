<!DOCTYPE html>

<!-- Código para gerar GETTERS e SETTERS -->

<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        $atr = array("numConta", "tipo", "dono", "saldo", "status");

        foreach ($atr as $c) {
            echo "public function get".$c. "(){<br />";
            echo "return $". "this->".$c. ";<br />}<br /><br />";

            echo "public function set".$c. "($"."n"."){<br />";
            echo "$". "this->".$c. " = $". "n". ";<br />}<br /><br />";
        }
        ?>
    </body>
</html>
