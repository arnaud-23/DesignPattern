<?php
use DesignPattern\Creational\Builder\PizzaBuilderImpl;

/**
 * Class PizzaBuilderImplTest
 *
 * @author Arnaud Lefèvre <arnaud.h.lefevre@gmail.com>
 */
class PizzaBuilderImplTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \LogicException
     * @expectedExceptionMessage Pizza must be build with a dough
     */
    public function build_WithoutDough()
    {
        $builder = new PizzaBuilderImpl();
        $builder->create()
            ->build();
    }

    /**
     * @test
     * @expectedException \LogicException
     * @expectedExceptionMessage Pizza must be build with a sauce
     */
    public function build_WithoutSauce()
    {
        $builder = new PizzaBuilderImpl();
        $builder->create()
            ->withDough('Pâte à pizza')
            ->build();
    }

    /**
     * @test
     */
    public function build_StandardPizza()
    {
        $builder = new PizzaBuilderImpl();
        $pizza = $builder->create()
            ->withDough('Pâte au fromage')
            ->withSauce('Sauce tomage')
            ->withTopping('Mozzarella')
            ->build();

        $this->assertInstanceOf('\DesignPattern\Creational\Builder\Pizza', $pizza);
    }
}
