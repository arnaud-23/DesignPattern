<?php

namespace DesignPattern\Creational\Factory;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class Ferrari implements VehiculeInterface
{
    private $color;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return Porsche
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
} 