<?php

namespace DesignPattern\Creational\Prototype;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 */
class HumanPrototypeFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var HumanPrototypeFactory
     */
    private $factory;

    /**
     * @test
     */
    public function makeEye_ReturnEyePrototype()
    {
        $eyeColour = 'blue';
        $humanEye = $this->factory->makeEye($eyeColour);

        $this->assertEquals(HumanEyePrototype::HUMAN_EYE_SHAPE, $humanEye->getShape());
        $this->assertEquals($eyeColour, $humanEye->getColour());
    }

    public function setUp()
    {
        $this->factory = new HumanPrototypeFactory();
        $this->factory->setEyePrototype(new HumanEyePrototype());
    }
}
