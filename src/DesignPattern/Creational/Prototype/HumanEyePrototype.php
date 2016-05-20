<?php

namespace DesignPattern\Creational\Prototype;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 */
class HumanEyePrototype extends EyePrototype
{
    const HUMAN_EYE_SHAPE = 'circular';

    public function __construct()
    {
        $this->shape = self::HUMAN_EYE_SHAPE;
    }

    public function __clone()
    {
    }
}
