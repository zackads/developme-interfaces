<?php

namespace App\Tricksy;

use Iterator;

// I implemented this as an Iterator-like object containing an array of
// ASCII characters, populated by a for loop in the constructor.
//
// The below code is from the answer, typed out by yours truly to understand
// what an Iterator is.
//
// https://github.com/develop-me/bootcamp--week-06--php/blob/master/challenges/08-interfaces/answers/app/Tricksy/Alphabet.php

class Alphabet implements Iterator
{
    private $code;

    public function __construct()
    {
        $this->rewind();
    }

    public function rewind()
    {
        $this->code = 65;
    }

    public function current()
    {
        return chr($this->code);
    }

    public function key()
    {
        return $this->code - 65;
    }

    public function next()
    {
        $this->code += 1;
    }

    public function valid()
    {
        return $this->code >= 65 && $this->code <= 90;
    }
}
