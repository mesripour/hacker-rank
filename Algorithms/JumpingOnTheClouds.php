<?php

// input
fscanf(STDIN, "%d\n", $n);
fscanf(STDIN, "%[^\n]", $c_temp);
$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function jumpingOnClouds($clouds)
{
    $i = $steps = 0;

    while ($i < count($clouds) - 1) {
        if ($clouds[$i + 1] == 1) {
            $i += 2;
        } else {
            if (isset($clouds[$i + 2])) {
                if ($clouds[$i + 2] == 1) {
                    $i++;
                } else {
                    $i += 2;
                }
            } else {
                $i++;
            }
        }

        $steps++;
    }

    return $steps;
}

// output
$result = jumpingOnClouds($c);
fwrite(STDOUT, $result . PHP_EOL);
