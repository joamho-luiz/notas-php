<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style> body{ font-size: 20pt; line-height: 40px; }</style>
    </head>
    <body>
        <?php
            $ano = isset($_GET["ano"])?$_GET["ano"]:"0";
            $idd = date("Y") - $ano;

            if($idd < 18){
                $voto = "Não pode";
                $carta = "Não pode";
            }elseif($idd>=16 && $idd<18){
                $voto = "se quiser pode";
                $carta = "Não pode";
            }else{
                $voto = "é obrigado a";
                $carta = "pode";
            }

            echo "Você $voto votar e $carta dirigir";
        ?>

        <a href="env.html"><b>Voltar</b></a>
    </body>
</html>
