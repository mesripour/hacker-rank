<?php

// input
$s = '';
fscanf(STDIN, "%[^\n]", $s);
fscanf(STDIN, "%ld\n", $n);

// solution
function getRepeat($s, $length)
{
    $repeat = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($s[0] == $s[$i]) {
            $repeat++;
        }
    }

    return $repeat;
}

function repeatedString($s, $n)
{
    $length = strlen($s);
    $repeat = getRepeat($s, $length);
    $r1 = (int)floor($n / $length) * $repeat;

    $length = $n % $length;
    $r2 = getRepeat($s, $length);

    $result = $r1 + $r2;
    return $result;
}

// output
$result = repeatedString($s, $n);
fwrite(STDOUT, $result . PHP_EOL);
