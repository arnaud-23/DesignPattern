<?php

namespace DesignPattern\Creational\Builder;

/**
 * @author Arnaud Lefèvre <arnaud.h.lefevre@gmail.com>
 */
interface PizzaBuilder
{
    /**
     * @return PizzaBuilder
     */
    public function create();

    /**
     * @param string $dough
     *
     * @return PizzaBuilder
     */
    public function withDough($dough);

    /**
     * @param string $sauce
     *
     * @return PizzaBuilder
     */
    public function withSauce($sauce);

    /**
     * @param string $topping
     *
     * @return PizzaBuilder
     */
    public function withTopping($topping);

    /**
     * @return Pizza
     */
    public function build();
}
