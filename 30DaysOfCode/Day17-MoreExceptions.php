<?php

class Calculator
{
    /**
     * @param int $n
     * @param int $p
     * @return int
     * @throws Exception
     */
    public function power(int $n, int $p): int
    {
        if ( ($n >= 0) && ($p >= 0) ) {
            return pow($n, $p);
        } else {
            throw new Exception('n and p should be non-negative');
        }
    }
}

$myCalculator = new Calculator();
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try {
        $ans = $myCalculator->power($n,$p);
        echo $ans . PHP_EOL;
    }
    catch(Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}
