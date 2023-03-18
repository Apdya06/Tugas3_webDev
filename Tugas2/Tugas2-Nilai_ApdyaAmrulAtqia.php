<?php
$mtk = rand(1,100); $fis = rand(1,100); $bio = rand(1,100);
$rata = ($mtk + $fis + $bio) / 3;   
    if ($rata >= 60)
        echo 'Lulus Dengan Nilai: '. round($rata, 2);
    else
        echo 'Tidak Lulus Dengan Nilai: '. round($rata, 2);
?>