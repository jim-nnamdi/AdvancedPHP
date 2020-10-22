<?php 

declare(strict_types = 1);

namespace designpatterns\behavioral\iterators;
use Countable;
use iterator; 

class BookList implements Countable, iterator{
    private $books = [];
    private $currentindex = 0;

    public function add_book(Book $book){
        $this->books[] == $book;
    }
    public function remove_book(Book $book_to_remove){
        foreach ($book_to_remove as $key => $book) {
            if($this->book->getAuthorAndTitle() === $this->book_to_remove->getAuthorAndTitle()){
                unset($this->books[$key]);
            }
        }
        $this->books = array_values($this->books);
    }
    public function count():int{
        return count($this->books);
    }
    public function current():Book{
        return $this->books[$this->currentindex];
    }
    public function key(){
        return $this->currentindex;
    }
    public function next(){
        $this->currentindex++
    }
    public function rewind(){
        $this->currentindex = 0;
    }
}