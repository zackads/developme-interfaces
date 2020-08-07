<?php

namespace App\Tricksy;

use Iterator;

class Alphabet implements Iterator
{
    private $position = 0;
    private $array = array();

    public function __construct()
    {
        $this->position = 0;
        for ($i = 65; $i < 91; $i += 1) {
            $this->array[] = chr($i);
        }
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}
