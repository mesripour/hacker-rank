<?php

// input
for ($i = 0; $i < 6; $i++) {
    fscanf(STDIN, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

// solution
function hourglasses($arr)
{
    $count = count($arr) - 2;
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count; $j++) {
            $sum[] = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2] + $arr[$i+1][$j+1] + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];
        }
    }

    return max($sum);
}

// output
$result = hourglasses($arr);
fwrite(STDOUT, $result . PHP_EOL);
