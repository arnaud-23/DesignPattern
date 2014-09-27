<?php

namespace DesignPattern\Creational\Builder;

/**
 * @author Arnaud Lefèvre <arnaud.h.lefevre@gmail.com>
 */
class PizzaBuilderImpl implements PizzaBuilder
{
    /**
     * @var Pizza
     */
    private $pizza;

    public function create()
    {
        $this->pizza = new Pizza();

        return $this;
    }

    public function withDough($dough)
    {
        $this->pizza->setDough($dough);

        return $this;
    }

    public function withSauce($sauce)
    {
        $this->pizza->setSauce($sauce);

        return $this;
    }

    public function withTopping($topping)
    {
        $this->pizza->setTopping($topping);

        return $this;
    }

    public function build()
    {
        if (null === $this->pizza->getDough()) {
            throw new \LogicException('Pizza must be build with a dough');
        }

        if (null === $this->pizza->getSauce()) {
            throw new \LogicException('Pizza must be build with a sauce');
        }

        return $this->pizza;
    }
}
