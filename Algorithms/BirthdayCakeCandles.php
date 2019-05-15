<?php

// input
fscanf(STDIN, "%d\n", $ar_count);
fscanf(STDIN, "%[^\n]", $ar_temp);
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function birthdayCakeCandles($ar)
{
    $max  = max($ar);
    $count = count(array_keys($ar, $max));

    return $count;
}

// output
$result = birthdayCakeCandles($ar);
fwrite(STDOUT, $result . PHP_EOL);
