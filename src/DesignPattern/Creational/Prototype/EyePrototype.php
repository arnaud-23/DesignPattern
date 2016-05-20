<?php

namespace DesignPattern\Creational\Prototype;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 */
abstract class EyePrototype
{
    /**
     * @var string
     */
    protected $colour;

    /**
     * @var string
     */
    protected $shape;

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    abstract public function __clone();
}
