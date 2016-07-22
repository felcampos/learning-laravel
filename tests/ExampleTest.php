<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    //Não persistirá os dados no BD.
    //use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/register')
             ->type('Felipe', 'name')
             ->type('felipe@teste.com', 'email')
             ->type('123456', 'password')
             ->type('123456', 'password_confirmation')
             ->press('Register')
             ->seePageIs('/');

    }
}
