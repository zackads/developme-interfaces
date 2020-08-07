<?php

namespace App\Tricksy;

use Iterator;

class Range implements Iterator
{
    private $start;
    private $finish;
    private $position;

    public function __construct(int $start, int $finish)
    {
        $this->start = $start;
        $this->finish = $finish;
        $this->rewind();
    }

    public function rewind()
    {
        $this->position = $this->start;
    }

    public function current()
    {
        return $this->position;
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
        return ($this->position >= $this->start && $this->position <= $this->finish);
    }
}
