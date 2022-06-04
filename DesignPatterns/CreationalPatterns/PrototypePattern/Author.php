<?php

namespace CreationalPatterns\PrototypePattern;

class Author
{

    /**
     * @var array
     */
    private array $pages = [];

    /**
     * Constructor of Author class
     * @param string $name
     */
    public function __construct(private string $name)
    {
    }

    /**
     * @param Page $page
     * @return void
     */
    public function addPage(Page $page): void
    {
        $this->pages[] = $page;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getPages(): array
    {
        return $this->pages;
    }
}