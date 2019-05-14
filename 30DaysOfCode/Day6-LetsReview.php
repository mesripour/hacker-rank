<?php

// input
$t = trim(fgets(STDIN));
for ($i = 1; $i <= $t; $i++) {
    $inputs[] = trim(fgets(STDIN));
}

// solution
$result = null;
foreach ($inputs as $input) {
    for ($i = 0; $i < strlen($input); $i += 2) {
        $result .= $input[$i];
    }
    $result .= ' ';
    for ($i = 1; $i < strlen($input); $i += 2) {
        $result .= $input[$i];
    }

    $result .= PHP_EOL;
}

// output
fwrite(STDOUT, $result);