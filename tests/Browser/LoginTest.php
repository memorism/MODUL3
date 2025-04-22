<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')                     
                ->assertPathIs('/login')                
                ->type('email', 'admin@gmail.com')        
                ->type('password', 'password')            
                ->press('LOG IN');                                     
        });
    }
}

