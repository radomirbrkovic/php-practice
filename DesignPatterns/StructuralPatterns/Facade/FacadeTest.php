<?php

namespace StructuralPatterns\Facade;

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    /**
     * @return void
     */
    public function testShapes(): void
    {
        $shape = new ShapeFacade();

        // test square area
        $this->assertEquals(36, $shape->getSquareArea(6));

        // test rectangle area
        $this->assertEquals(182.04, $shape->getRectangleArea(12.3, 14.8));

        // test circle  area
        $this->assertEquals(272.89, $shape->getCircleArea(9.32));
    }
}