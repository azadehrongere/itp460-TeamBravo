<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    // public function test1()
    // {
    //     $this->withoutMiddleware();

    //     $this->visit('/home')
    //          ->seePageIs('/home');
    // } 

    

    /*public function ...()
    {
    	$controller = new ...();
    	$func = "";
    	$response = $controller->$func;
    	$stringResponse = strval($response);
    	$this->assertContains('...', $stringResponse);
    }*/
}