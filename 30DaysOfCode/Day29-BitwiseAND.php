<?php

fscanf(STDIN, "%d", $t);

for($i = 0; $i < $t; $i++) {
    fscanf(STDIN, "%d %d", $n, $k);
    $res = ( (($k-1)|$k) > $n && $k%2 == 0) ? $k-2 : $k-1;
    echo $res . PHP_EOL;
}
