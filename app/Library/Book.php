<?php

declare(strict_types=1);

namespace App\Library;

class Book
{
    private $title;
    private $totalPages;
    private $pages = 1;
    private $read;

    public function __construct(string $title, int $totalPages)
    {
        $this->title = $title;
        $this->totalPages = $totalPages;
    }

    public function read(int $num)
    {
        $this->pages += $num;

    }

    public function currentPage()
    {
        return $this->pages;

    }
}


// Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.