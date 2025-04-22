<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *  @group view-note
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
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->assertSee('Author');
        });
    }
}
