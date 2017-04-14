<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{

    /**
     * A basic browser test example.
     *
     * @return void
     */
    
    public function test1()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://127.0.0.1:8000/home')
                    ->assertSee('Welcome to Incubate USC');
        });
    }
    public function test2()
    {
        $this->browse(function ($browser) {
            $browser->click('#logocont')
                    ->assertPathIs('/home');
        });
    }
    // public function test3()
    // {
    //     $this->browse(function ($browser) {
    //         $browser->click('#logocont')
    //                 ->assertPathIs('/home');
    //     });
    // }
}
