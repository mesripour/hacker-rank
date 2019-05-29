<?php

// solution
class Solution
{
    public $queue = [];
    public $stack = [];

    /**
     * stack push
     *
     * @param $char string
     * @return void
     */
    public function pushCharacter(string $char)
    {
        array_push($this->stack, $char);
    }

    /**
     * stack pop
     *
     * @return string
     */
    public function popCharacter()
    {
        return array_pop($this->stack);
    }

    /**
     * queue push
     *
     * @param $char string
     * @return void
     */
    public function enqueueCharacter(string $char)
    {
        array_unshift($this->queue, $char);
    }

    /**
     * queue pop
     *
     * @return string
     */
    public function dequeueCharacter()
    {
        return array_pop($this->queue);
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < ($len / 2); $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome) {
    echo "The word, ".$s.", is a palindrome.";
}
else {
    echo "The word, ".$s.", is not a palindrome.";
}

