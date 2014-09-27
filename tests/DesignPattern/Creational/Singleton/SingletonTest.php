<?php

namespace DesignPattern\Tests\Creational\Singleton;

use DesignPattern\Creational\Singleton\Singleton;

/**
 * Class SingletonTest
 *
 * @author Arnaud Lefèvre <arnaud.h.lefevre@gmail.com>
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getInstance_ReturnSameInstance()
    {
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();

        $this->assertSame($singleton1, $singleton2);
    }
}
