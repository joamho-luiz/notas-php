<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                $n = array(
                    array(1,2),
                    array(3,4),
                    array(5,6)
                );
                print_r($n);

                echo $n[0][1]. "  ". $n[1][1]. "  ". $n[2][1];
            ?>
        </pre>
    </body>
</html>
