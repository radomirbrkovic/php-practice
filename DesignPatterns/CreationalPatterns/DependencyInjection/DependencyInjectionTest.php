<?php

namespace CreationalPatterns\DependencyInjection;

use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    /**
     * @return void
     */
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'root', 'secret');
        $connection = new DatabaseConnection($config);

        $this->assertSame('root:secret@localhost:3306', $connection->getDsn());
    }
}