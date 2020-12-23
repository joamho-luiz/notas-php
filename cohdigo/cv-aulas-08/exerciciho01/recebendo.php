<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style> body{font-size: 20pt; line-height: 40px;}</style>
    </head>
    <body>
        <?php
            $valor = $_GET["v"];
            echo "A raiz quadrada de $valor é ". sqrt($valor);
        ?>

        <br /><br />
        <a href="enviando.html"><b>VOLTAR</b></a>
    </body>
</html>
