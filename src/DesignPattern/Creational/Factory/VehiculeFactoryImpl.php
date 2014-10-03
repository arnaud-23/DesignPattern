<?php

namespace DesignPattern\Creational\Factory;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class VehiculeFactoryImpl implements VehiculeFactory
{

    public static function make($vehiculeName)
    {
        switch ($vehiculeName) {
            case 'porsche':
                $vehicule = new Porsche();
                break;
            case 'ferrari':
                $vehicule = new Ferrari();
                break;
            default:
                throw new \Exception('Not found');
        }

        return $vehicule;
    }
}
