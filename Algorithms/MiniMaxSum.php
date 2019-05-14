<?php

// input
fscanf(STDIN, "%[^\n]", $arr_temp);
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function miniMaxSum($arr)
{
    $min = min($arr);
    $max = max($arr);
    $sum = array_sum($arr);
    $result = ($sum - $max) . ' ' . ($sum - $min);

    return $result;
}

// output
$result = miniMaxSum($arr);
fwrite(STDOUT, $result . PHP_EOL);
