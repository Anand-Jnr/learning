<html>
    <body>
        <h1>PHP Numbers</h1>
        <?php
        $a = 5;
        $b = 2.5;
        $c = "25";

        var_dump($a);
        print ("<br>");
        var_dump($b);
        print ("<br>");
        var_dump($c);
        ?>
        <hr>
        <h1>PHP Integers</h1>
        <?php
        $z = 12;
        var_dump(is_int($z));
        $v = 14.4;
        var_dump(is_int($v));
        ?>