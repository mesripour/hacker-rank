<?php

class person {
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person
{
    private $testScores;

    /*
    *   Class Constructor
    *
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    public function __construct($first_name, $last_name, $identification, $scores)
    {
        parent::__construct($first_name, $last_name, $identification);
        $this->testScores = $scores;
    }


    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    public function calculate()
    {
        $avg = array_sum($this->testScores) / count($this->testScores);
        switch ($avg) {
            case ($avg >= 90) AND ($avg <= 100):
                $result = 'O';
                break;
            case ($avg >= 80) AND ($avg < 90):
                $result = 'E';
                break;
            case ($avg >= 70) AND ($avg < 80):
                $result = 'A';
                break;
            case ($avg >= 55) AND ($avg < 70):
                $result = 'P';
                break;
            case ($avg >= 40) AND ($avg < 55):
                $result = 'D';
                break;
            default:
                $result = 'T';
        }

        Return $result;
    }
}

$file = fopen("php://stdin", "r");
$name_id = explode(' ', fgets($file));
$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];
fgets($file);
$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);
$student->printPerson();
print("Grade: {$student->calculate()}");