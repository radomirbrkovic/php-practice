<?php

namespace CreationalPatterns\FactoryMethod;

use CreationalPatterns\FactoryMethod\BusinessClasses\BloggerAppEncoder;
use CreationalPatterns\FactoryMethod\BusinessClasses\BloggerCommsManager;
use CreationalPatterns\FactoryMethod\BusinessClasses\MegaAppEncoder;
use CreationalPatterns\FactoryMethod\BusinessClasses\MegaCommsManager;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    /**
     * @return void
     */
    public function testBlogger(): void
    {
        $commsManager = new BloggerCommsManager();
        $this->assertEquals('Blogger header', $commsManager->getHeaderText());
        $this->assertEquals('Blogger footer', $commsManager->getFooterText());
        $this->assertInstanceOf(BloggerAppEncoder::class, $commsManager->getAppEncoder());
    }

    /**
     * @return void
     */
    public function testMega(): void
    {
        $commsManager = new MegaCommsManager();
        $this->assertEquals('Mega header', $commsManager->getHeaderText());
        $this->assertEquals('Mega footer', $commsManager->getFooterText());
        $this->assertInstanceOf(MegaAppEncoder::class, $commsManager->getAppEncoder());
    }

}