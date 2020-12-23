<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style> body{ font-size: 20pt; line-height: 40px;}</style>
    </head>
    <body>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:date("Y");
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
            $idade = date("Y") - $ano;
            echo "$nome é um $sexo tem $idade anos.";
        ?>

        <br /><br />
        <a href="env.html"><b>Voltar</b></a>
    </body>
</html>
