<?php

namespace BehavioralPatterns\Iterator;

class Book
{
    /**
     * @param string $title
     * @param string $author
     */
    public function __construct(private string $title, private string $author)
    {
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle(): string
    {
        return $this->getTitle() . " by " . $this->getAuthor();
    }
}