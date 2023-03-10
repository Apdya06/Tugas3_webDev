<?php
    echo "AND\n";
    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && false);

    echo "OR\n";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || false);

    echo "XOR\n";
    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor false);

    echo "NOT\n";
    var_dump(!true);
    var_dump(!false);
?>