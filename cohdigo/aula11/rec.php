<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style> body{ font-size: 20pt; line-height: 40px;}</style>
    </head>
    <body>
        <?php
            $c = 100;
            while($c >= 0){
                echo $c. " é par.<br />";
                $c -= 2;
            }
        ?>
    </body>
</html>
