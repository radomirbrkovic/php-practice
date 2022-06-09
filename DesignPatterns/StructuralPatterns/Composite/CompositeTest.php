<?php

namespace StructuralPatterns\Composite;

use PHPUnit\Framework\TestCase;
use StructuralPatterns\Composite\BusinessClasses\Form;
use StructuralPatterns\Composite\BusinessClasses\InputElement;
use StructuralPatterns\Composite\BusinessClasses\TextElement;

class CompositeTest extends TestCase
{
    /**
     * @return void
     */
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}