<?php

namespace DesignPattern\Creational\Singleton;

/**
 * @author Arnaud Lefèvre <arnaud.h.lefevre@gmail.com>
 */
class Singleton
{

    private static $instance;

    protected function __construct()
    {
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}
