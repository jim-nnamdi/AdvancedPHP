<?php 

declare(strict_types = 1);

namespace designpatterns\behavioral\iterators\tests;

use designpatterns\behavioral\iterators\Book;
use designpatterns\behavioral\iterators\BookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase{
    public function can_iterate_over_book_list(){
        $book_list = new BookList();
        $book_list->add_book = new Book("advanced php", "jim samuel");
        $book_list->add_book = new Book("react laravel", "jim metro");
        $books = [];

        foreach ($book_list as $book) {
            $books[] = $book->getAuthorAndTitle();
        }
        $this->assertSame(
            [
                'book by jim samuel with title advanced php',
                'book by jim metro with title react laravel'
            ],
            $books
        );
    }
}