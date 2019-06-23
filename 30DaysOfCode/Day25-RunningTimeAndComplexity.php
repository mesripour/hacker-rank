<?php

// input
$t = fgets(STDIN);
for ($i = 1; $i <= $t; $i++) {
    $numbers[] = trim(fgets(STDIN));
}

// solution
foreach ($numbers as $number) {

    $msg = 'Prime';
    if ($number == 1) {
        $msg = 'Not prime';
    } else {
        for($i = 2; $i <= floor(sqrt($number)); $i++) {
            if( ($number % $i) == 0 ) {
                $msg = 'Not prime';
            }
        }
    }
 
    echo $msg . PHP_EOL;
}
