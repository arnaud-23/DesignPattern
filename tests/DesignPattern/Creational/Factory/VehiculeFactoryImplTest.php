<?php

namespace DesignPattern\Tests\Creational\Singleton;

use DesignPattern\Creational\Factory\VehiculeFactoryImpl;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class VehiculeFactoryImplTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function make_ReturnVehicule()
    {
        $factory = VehiculeFactoryImpl::make('porsche');

        $this->assertInstanceOf('DesignPattern\Creational\Factory\VehiculeInterface', $factory);
    }

    /**
     * @test
     * @expectedException \Exception
     * @expectedExceptionMessage Not found
     */
    public function make_WithWrongVehicule()
    {
        VehiculeFactoryImpl::make('twingo');
    }
}
