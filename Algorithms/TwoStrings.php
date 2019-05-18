<?php

// solution
function twoStrings($s1, $s2)
{
    // remove duplicate characters
    $s1 = array_unique(str_split($s1));
    $s2 = array_unique(str_split($s2));

    // find
    foreach ($s1 as $c1) {
        foreach ($s2 as $c2) {
            if ($c1 == $c2) {
                return 'YES';
            }
        }
    }

    return 'NO';
}

// input and output
fscanf(STDIN, "%d\n", $q);
for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s1 = '';
    fscanf(STDIN, "%[^\n]", $s1);
    $s2 = '';
    fscanf(STDIN, "%[^\n]", $s2);
    $result = twoStrings($s1, $s2);
    fwrite(STDOUT, $result . PHP_EOL);
}
