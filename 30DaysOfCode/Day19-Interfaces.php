<?php

interface AdvancedArithmetic
{
    public function divisorSum($n);
}

// solution
class Calculator implements AdvancedArithmetic
{
    /**
     * @param int $n
     * @return int
     */
    function divisorSum($n)
    {
        $sum = 0;
        $h = floor($n / 2);
        for ($i = 1; $i <= $h; $i++) {
            if ( ($n % $i) == 0 ) {
                $sum += $i;
            }
        }
        $result = $sum + $n;

        return $result;
    }
}

// input and output
$n = intval(fgets(STDIN));
$myCalculator = new Calculator();
if ($myCalculator instanceof AdvancedArithmetic) {
    $sum = $myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n" . $sum;
}
else {
    echo "Wrong answer";// You will get this output if you dont implement
}
