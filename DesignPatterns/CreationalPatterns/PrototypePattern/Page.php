<?php

namespace CreationalPatterns\PrototypePattern;

class Page
{
    /**
     * @var array
     */
    private array $comments = [];

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @param string $title
     * @param string $content
     * @param Author $author
     */
    public function __construct(private string $title, private string $content, private Author $author)
    {
        $this->author->addPage($this);
        $this->date = new \DateTime();
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param string $comment
     * @return void
     */
    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * @return void
     */
    public function __clone(): void
    {
        $this->title = 'Copy of '.$this->title;
        $this->author->addPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}