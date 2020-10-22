<?php 

declare(strict_types =1);

namespace designpatterns\behavioral\iterators;

class Book{
    private $author;
    private $title;

    public function __construct($author, $title){
        $this->author = $author;
        $this->title  = $title; 
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getAuthor():string{
        return $this->author;
    }

    public function getAuthorAndTitle():string{
        return "book by " . $this->getAuthor() ." with title " . $this->getTitle();
    }
}