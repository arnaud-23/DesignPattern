<?php

namespace DesignPattern\Creational\Prototype;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 */
class HumanPrototypeFactory
{
    /**
     * @var EyePrototype
     */
    private $eyePrototype;

    /**
     * @return HumanEyePrototype
     */
    public function makeEye($colour)
    {
        $eye = clone $this->eyePrototype;
        $eye->setColour($colour);

        return $eye;
    }

    public function setEyePrototype(EyePrototype $eyePrototype)
    {
        $this->eyePrototype = $eyePrototype;
    }
}
