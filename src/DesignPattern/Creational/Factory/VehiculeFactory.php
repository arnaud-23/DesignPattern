<?php

namespace DesignPattern\Creational\Factory;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
interface VehiculeFactory
{
    /**
     * @param string $vehiculeName
     *
     * @return VehiculeInterface
     */
    public static function make($vehiculeName);
} 