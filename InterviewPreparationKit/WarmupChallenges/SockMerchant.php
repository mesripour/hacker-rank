<?php

//input
fscanf(STDIN, "%d\n", $n);
fscanf(STDIN, "%[^\n]", $ar_temp);
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function sockMerchant($n, $ar)
{
    $pair = 0;
    while ($ar) {
        $firstSocks = array_pop($ar);
        $socksCount = 1;
        foreach ($ar as $key => $secondSocks) {
            if ($firstSocks == $secondSocks) {
                $socksCount++;
                unset($ar[$key]);
            }
        }
        $pair += floor($socksCount / 2);
    }

    return $pair;
}

// output
$result = sockMerchant($n, $ar);
fwrite(STDOUT, $result . PHP_EOL);