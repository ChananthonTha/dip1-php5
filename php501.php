<?php
    echo "<h1>";

    function add($a,$b)
    {
        $a = 10;
        $b = 5;
        $add = $a + $b;
        echo "$a + $b = $add <br />";
    }
    add(20,5);

    function sub($a,$b)
    {
        // $a = 10;
        // $b = 5;
        $sub = $a - $b;
        echo "$a - $b = $sub <br />";
    }
    echo (sub(30,20));

    function mul($a,$b)
    {
        // $a = 10;
        // $b = 5;
        $mul = $a * $b;
        echo "$a * $b = $mul <br />";
    }
    echo (mul(20,30));

    function div($a,$b)
    {
        $a = 11.20;
        $b = 5;
        $div = $a/$b;
        return "$a / $b = $div <br />";
    }
    //div();

    function mod($a,$b)
    {
        $a = 11;
        $b = 5;
        $mod = $a%$b;
        echo "$a % $b = $mod <br />";
    }
    //mod();

    echo "</h1>";
?>