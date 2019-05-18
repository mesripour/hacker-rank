<?php

// input
fscanf(STDIN, "%d\n", $n);

// solution
function consecutive($n)
{
    $count = $max = 0;
    while ($n >= 1) {
        $value = $n % 2;
        $n /= 2;
        $count = ($value == 1) ? ++$count :  0;
        if ($count > $max) {
            $max = $count;
        }
    }

    return $max;
}

// output
$result = consecutive($n);
fwrite(STDOUT, $result);
