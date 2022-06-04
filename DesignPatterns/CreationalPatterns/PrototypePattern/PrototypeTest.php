<?php

namespace CreationalPatterns\PrototypePattern;

use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     * @return void
     */
    public function testCloning(): void
    {
        $author = new Author('John Doe');
        $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

        $this->assertEquals("Tip of the day", $page->getTitle());
        $page->addComment("Nice tip, thanks!");

        $this->assertEquals(1, count($page->getComments()));
        $this->assertEquals(1, count($author->getPages()));

        $draft = clone $page;
        $this->assertEquals("Copy of Tip of the day", $draft->getTitle());
        $this->assertTrue(empty($draft->getComments()));
        $this->assertEquals(2, count($author->getPages()));
    }
}