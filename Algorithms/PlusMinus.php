<?php

// input
fscanf(STDIN, "%d\n", $n);
fscanf(STDIN, "%[^\n]", $arr_temp);
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function plusMinus($arr)
{
    $totalCount = count($arr);
    $positiveCount = $negativeCount = $zeroCount = 0;
    foreach ($arr as $value) {
        if ($value > 0) {
            $positiveCount++;
        } elseif ($value < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }
    $positiveRatio = $positiveCount / $totalCount;
    $negativeRatio = $negativeCount / $totalCount;
    $zeroRation = $zeroCount / $totalCount;

    return $positiveRatio . PHP_EOL . $negativeRatio . PHP_EOL . $zeroRation;
}

// output
$result = plusMinus($arr);
fwrite(STDOUT, $result);

