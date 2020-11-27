<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <?php
            $tex = isset($_GET["t"])?$_GET["t"]:"Não há texto.";
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"
        ?>
        <meta charset="utf-8">
        <title></title>
        <style>
            body{
                font-size: 20pt;
                line-height: 40px;
            }

            span.texto{
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;  /*funciona sem echo*/
            }
        </style>
    </head>
    <body>
        <?php
            echo "<span class='texto'>$tex</span>";
        ?>

        <br /><br />
        <a href="env.html"><b>Voltar</b></a>
    </body>
</html>
