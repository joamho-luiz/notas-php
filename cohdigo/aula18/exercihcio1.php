<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                $n = array(3,4,7,2);
                print_r($n);

                $c = range(5,20,5); // de 5 até 20 pulando de 5 em 5.
                print_r($c);

                foreach ($c as $k) {
                    echo "$k   ";
                }

                $a = array (0 => "2", 5 => "0", 10 => 18);
                $a[] = 4;
                unset($a[11]);

                print_r($a);

                echo "<br /><br />CHAVES ASSOCIATIVAS:";

                $v = array ("nome" => "Ana", "idade" => 23);

                foreach ($v as $k => $c) {
                    echo "<br /><br />O campo $k possui o conteudo $c";
                }


            ?>
        </pre>
    </body>
</html>
