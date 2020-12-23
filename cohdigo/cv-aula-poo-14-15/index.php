<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once "video.php";
                require_once "gafanhoto.php";
                require_once "visualisaccamho.php";

                $v[1] = new Video("Despacito");
                $v[2] = new Video("Down Town");
                $v[0] = new Video("Je dance");

                $g[1] = new Gafanhoto("July", 28, "F", "@jul");
                $g[2] = new Gafanhoto("Tim", 26, "M", "@ttim");

                $s[0] = new Visualisaccamho($v[1], $g[2]);

                var_dump($v);
                var_dump($g);
                var_dump($s);
            ?>
        </pre>
    </body>
</html>
