<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Logout extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')                     
                ->assertPathIs('/login')                
                ->type('email', 'admin@gmail.com')        
                ->type('password', 'password')            
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->click('@user-dropdown')
                ->click('@logout-button')
                ->assertPathIs('/')
                ; 

        });
    }
}
