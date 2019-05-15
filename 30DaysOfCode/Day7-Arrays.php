<?php

// input
fscanf(STDIN, "%d\n", $n);
fscanf(STDIN, "%[^\n]", $arr_temp);
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
$result = null;
for ($i = $n ; $i > 0; $i--) {
    $result .= $arr[$i-1] . ' ';
}

// output
fwrite(STDOUT, trim($result) . PHP_EOL);