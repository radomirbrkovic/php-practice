<?php

namespace StructuralPatterns\Decorator;

use PHPUnit\Framework\TestCase;
use StructuralPatterns\Decorator\Json\JsonRender;
use StructuralPatterns\Decorator\XML\XMLRender;

class DecoratorTest extends TestCase
{
    /**
     * @var InputData
     */
    protected InputData $inputData;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->inputData = new InputData([
            'name' => 'John Doe',
            'phone' => '+1-202-555-0171'
        ]);

        parent::setUp();
    }

    /**
     * @return void
     */
    public function testJsonRender()
    {
        $jsonRender = new JsonRender($this->inputData);
        $renderedData = json_decode($jsonRender->renderData(), true);
        $this->assertArrayHasKey('name', $renderedData);
        $this->assertArrayHasKey('phone', $renderedData);
    }

    /**
     * @return void
     * @throws \DOMException
     */
    public function testXmlRender()
    {
        $xmlRender = new XMLRender($this->inputData);
        $xml = \XMLReader::xml($xmlRender->renderData());
        $xml->setParserProperty(\XMLReader::VALIDATE, true);
        $this->assertTrue($xml->isValid());
    }

}