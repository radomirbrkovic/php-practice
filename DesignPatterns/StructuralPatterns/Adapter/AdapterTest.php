<?php

namespace StructuralPatterns\Adapter;

use PHPUnit\Framework\TestCase;
use StructuralPatterns\Adapter\BusinessClasses\Book;
use StructuralPatterns\Adapter\BusinessClasses\EBookAdapter;
use StructuralPatterns\Adapter\BusinessClasses\Kindle;
use StructuralPatterns\Adapter\Interfaces\BookInterface;

class AdapterTest extends TestCase
{

    /**
     * @dataProvider adapterDataProvider
     * @param BookInterface $book
     */
    public function testAdapterDesignPattern(BookInterface $book): void
    {
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }

    /**
     * @return array
     */
    public function adapterDataProvider(): array
    {
        $testCases = [];

        $testCases[] =
            [
                'book' => new Book()
            ];

        $testCases[] =
            [
                'book' => new  EBookAdapter(new Kindle())
            ];

        return $testCases;

    }
}