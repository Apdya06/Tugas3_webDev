<?php
    $A = 10;
    $B = 20;
    $C = 30;

    $plus = 0;
    $plus += $A + $B + $C;
    echo "Plus: ";
    var_dump ($plus);

    $minus = 70;
    $minus -= $A - $B - $C;
    echo "Minus: ";
    var_dump ($minus);

    $mult = 1;
    $mult *= $A * $B * $C;
    echo "Multi: ";
    var_dump ($mult);

    $div = 100;
    $div /= $A / $B / $C;
    echo "Division: ";
    var_dump ($div);

    $modul = 500;
    $modul %= $A;
    echo "Modul: ";
    var_dump ($modul);

    $square = 2;
    $square **= $A;
    echo "square: ";
    var_dump ($square);

?>