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
    
    public function url()
    {
        return '/home';
    }

    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

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
            $browser->visit('http://127.0.0.1:8000/company-profile')
                    ->click('#logocont')
                    ->assertPathIs('/home');
        });
    }
    public function test3()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://127.0.0.1:8000/profile')
                    //->waitFor('#editProfile')
                    ->assertSeeIn('#editProfile', 'Edit Profile');
        });
    }
    public function test4()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://127.0.0.1:8000/newjob')
                    ->assertVisible('#jobLevel')
                    ->assertVisible('#companySize')
                    ->assertVisible('#field');
        });
    }
    public function test5()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://127.0.0.1:8000/newcompany')
                    ->assertVisible('#companyDescription')
                    ->assertVisible('#companyName')
                    ->assertVisible('#contactName')
                    ->assertVisible('#contactEmail');
        });
    }
}
