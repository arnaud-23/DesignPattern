<?php

namespace DesignPattern\Creational\Builder;

class Pizza
{
    /**
     * @var string
     */
    private $dough;

    /**
     * @var string
     */
    private $sauce;

    /**
     * @var string
     */
    private $topping;

    /**
     * @return string
     */
    public function getDough()
    {
        return $this->dough;
    }

    /**
     * @param string $dough
     *
     * @return Pizza
     */
    public function setDough($dough)
    {
        $this->dough = $dough;

        return $this;
    }

    /**
     * @return string
     */
    public function getSauce()
    {
        return $this->sauce;
    }

    /**
     * @param string $sauce
     *
     * @return Pizza
     */
    public function setSauce($sauce)
    {
        $this->sauce = $sauce;

        return $this;
    }

    /**
     * @return string
     */
    public function getTopping()
    {
        return $this->topping;
    }

    /**
     * @param string $topping
     *
     * @return Pizza
     */
    public function setTopping($topping)
    {
        $this->topping = $topping;

        return $this;
    }
}


