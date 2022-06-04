<?php

namespace CreationalPatterns\Builder;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * @param SQLQueryBuilder $queryBuilder
     * @return SQLQueryBuilder
     */
    private function makeQuery(SQLQueryBuilder $queryBuilder): SQLQueryBuilder
    {
        return $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20);
    }

    /**
     * @return void
     */
    public function testMysql():void
    {
        $query = $this->makeQuery(new MysqlQueryBuilder());

        $this->assertInstanceOf(MysqlQueryBuilder::class, $query);
        $this->assertEquals("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;", $query->getQuery());
    }

    /**
     * @return void
     */
    public function testPostgres(): void
    {
        $query = $this->makeQuery(new PostgresQueryBuilder());
        $this->assertInstanceOf(PostgresQueryBuilder::class, $query);
        $this->assertEquals("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10 OFFSET 20;", $query->getQuery());
    }

}