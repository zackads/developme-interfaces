<?php

namespace App\Library;

class Book implements Titled
{
    private $title;
    private $totalNumPages;
    private $currentPage = 1;

    public function __construct(string $title, int $totalNumPages)
    {
        $this->title = $title;
        $this->$totalNumPages = $totalNumPages;
    }

    public function read(int $numPagesToRead): Book
    {
        $this->currentPage += $numPagesToRead;
        return $this;
    }

    public function currentPage(): int
    {
        return $this->currentPage;
    }

    public function title(): string
    {
        return $this->title;
    }
}
