<?php

// input
fscanf(STDIN, "%[^\n]", $s);

// solution
function timeConversion($s)
{
    $state = substr($s, -2, 2);
    $time24 = substr($s, 0, 8);
    $hour = substr($time24, 0, 2);
    if ($state == 'AM') {
        if ($hour == '12') {
            $time24 = substr_replace($time24, '00', 0, 2);
        }
    } else {
        if ($hour != '12') {
            $time24 = substr_replace($time24, ($hour + 12), 0, 2);
        }
    }

    return $time24;
}

// output
$result = timeConversion($s);
fwrite(STDOUT, $result . PHP_EOL);
