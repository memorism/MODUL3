<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test Register functionality.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')                                   
                ->clickLink('Register')                             
                ->assertPathIs('/register')                         
                ->type('name', 'Admin User')                        
                ->type('email', 'admin@gmail.com')                  
                ->type('password', 'password')                      
                ->type('password_confirmation', 'password')         
                ->press('REGISTER')                                 
                ->assertPathIs('/dashboard');                      
        });
    }
}
