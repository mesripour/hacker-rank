<?php

class Person
{

    public $age;

    public function __construct($initialAge)
    {
        if ($initialAge < 0) {
            echo 'Age is not valid, setting age to 0.' . PHP_EOL;
            $this->age = 0;
        } else {
            $this->age = $initialAge;
        }
    }

    public  function amIOld()
    {
        if ($this->age < 13) {
            echo 'You are young.' . PHP_EOL;
        } elseif ($this->age >= 13 && $this->age < 18) {
            echo 'You are a teenager.' . PHP_EOL;
        } else {
            echo 'You are old.' . PHP_EOL;
        }

    }
    public  function yearPasses()
    {
        $this->age++;
    }
}

$T = intval(fgets(STDIN));
for($i=0;$i<$T;$i++){
    $age=intval(fgets(STDIN));
    $p=new Person($age);
    $p->amIOld();
    for($j=0;$j<3;$j++){
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";
}