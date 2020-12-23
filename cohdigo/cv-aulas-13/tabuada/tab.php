<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for ($n=0; $n <=10 ; $n++) {
                for($i = 1; $i <= 10; $i++){
                    print "$n x $i = ". ($n * $i). "<br />";
                }
                echo "<br />";
            }
        ?>
    </body>
</html>
