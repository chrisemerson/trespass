<?php

namespace Tests;

use CEmerson\Trespass\Trespass;

class TrespassTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_correctly_sets_the_private_properties_of_an_anonymous_class()
    {
        $foo = new class {
            private $bar = 'foobar';

            public function getBar()
            {
                return $this->bar;
            }
        };

        Trespass::setProperties($foo, ['bar' => 'baz']);

        self::assertEquals($foo->getBar(), 'baz');
    }
}
