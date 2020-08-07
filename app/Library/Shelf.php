<?php

namespace App\Library;

class Shelf
{
    private $contents = [];

    public function addItem(Titled $title): Shelf
    {
        array_push($this->contents, $title);
        return $this;
    }

    public function titles(): array
    {
        $titles = [];

        foreach ($this->contents as $title) {
            array_push($titles, $title->title());
        }

        return $titles;
    }
}
