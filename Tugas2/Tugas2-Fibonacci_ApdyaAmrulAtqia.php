<?php
for ($preNum = 0, $currNum = 1, $i = 1; $i <= 20; $i++) {
    if ($i == 1) {
        echo $currNum . ", ";
    } else {
        $nexNum = $preNum + $currNum;
        echo $nexNum . ", ";

        $preNum = $currNum;
        $currNum = $nexNum;
    }
}
?>
