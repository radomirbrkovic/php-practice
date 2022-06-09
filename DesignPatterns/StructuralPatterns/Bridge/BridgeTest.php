<?php

namespace StructuralPatterns\Bridge;

use PHPUnit\Framework\TestCase;
use StructuralPatterns\Bridge\Implementation\GreenCircle;
use StructuralPatterns\Bridge\Implementation\RedCircle;

class BridgeTest extends TestCase
{
    /**
     * @dataProvider circleDataProvider
     * @param Circle $circle
     * @param string $center
     * @param float $radius
     * @param string $color
     */
    public function testBridgePattern(
        Circle $circle,
        string $center,
        float $radius,
        string $color
    ):  void
    {
        $circle->draw();

        $this->assertEquals($center, $circle->getCircle()->getCenter());
        $this->assertEquals($radius, $circle->getCircle()->getRadius());
        $this->assertEquals($color, $circle->getCircle()->getColor());
    }


    /**
     * @return array
     */
    public function circleDataProvider(): array
    {
        $testCases = [];

        $testCases[] = [
            'circle' => new Circle(100, 10, 10, new RedCircle()),
            'center' => '10 x 10',
            'radius' => 100,
            'color'  => 'red'
        ];

        $testCases[] = [
            'circle' => new Circle(15.3, 1, 10, new GreenCircle()),
            'center' => '1 x 10',
            'radius' => 15.3,
            'color'  => 'green'
        ];

        return $testCases;
    }

}