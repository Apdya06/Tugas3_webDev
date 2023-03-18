<?php
$prime = (int)readline("Mencari Bilangan Prima Yang Kurang Dari: ");
for ($a = 2; $a <= $prime; $a++)
    {
        $check = false  ;
        if ($a == 2 || $a == 3)
        {
            echo $a. ' ';
        }
        for ($i = 2; $i * $i <= $a; $i++)
        {
            if ($a % $i == 0)
            {
                $check = false;
                break;
            }
            $check = true;
        }
        if ($check == true)
            echo $a. ' ';        
    }
?>