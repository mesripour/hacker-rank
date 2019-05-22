<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;

    public function __construct($a)
    {
        // remove and set duplicate characters
        $this->elements = array_values(array_unique($a));
    }

    public function ComputeDifference()
    {
        $this->maximumDifference = 0;
        $count = count($this->elements) - 1;
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j <= $count; $j++) {
                $diff = abs($this->elements[$i] - $this->elements[$j]);
                if ($diff > $this->maximumDifference) {
                    $this->maximumDifference = $diff;
                }
            }
        }
    }
} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
