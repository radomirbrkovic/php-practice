<?php

namespace CreationalPatterns\AbstractFactoryPattern;

use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\BloggerAppEncoder;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\BloggerCommsManager;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\BloggerContactEncoder;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\BloggerTtdEncoder;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\MegaAppEncoder;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\MegaCommsManager;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\MegaContactEncoder;
use CreationalPatterns\AbstractFactoryPattern\BusinessClasses\MegaTtdEncoder;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
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
        $this->assertInstanceOf(BloggerContactEncoder::class, $commsManager->getContactEncoder());
        $this->assertInstanceOf(BloggerTtdEncoder::class, $commsManager->getTtdEncoder());
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
        $this->assertInstanceOf(MegaContactEncoder::class, $commsManager->getContactEncoder());
        $this->assertInstanceOf(MegaTtdEncoder::class, $commsManager->getTtdEncoder());
    }

}