<?php

namespace BehavioralPatterns\Iterator;

use Countable;
use Iterator;

class BookList implements Countable, Iterator
{
    /**
     * @var Book[]
     */
    private array $books = [];

    /**
     * @var int
     */
    private int $currentIndex = 0;

    /**
     * @param Book $book
     * @return void
     */
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    /**
     * @param Book $bookToRemove
     * @return void
     */
    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->books);
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->books[$this->currentIndex];
    }

    /**
     * @return void
     */
    public function next(): void
    {
        $this->currentIndex++;
    }

    /**
     * @return mixed
     */
    public function key(): mixed
    {
        return $this->currentIndex;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->currentIndex = 0;
    }
}