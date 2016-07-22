<?php

use App\Product;

class ProducTest extends PHPUnit_Framework_TestCase
{
    protected $product;

    //Metodo que roda antes de todos os testes.
    public function setUp()
    {
        $this->product = new Product('Fallout 4', 59);
    }

    /** @test */
    function AProductHasName()
    {

        $this->assertEquals('Fallout 4', $this->product->name());
    }

    
    /** @test */
    function AProductHasPrice()
    {
        $product = new Product('Fallout 4', 59);

        $this->assertEquals(59, $this->product->price());
    }
}