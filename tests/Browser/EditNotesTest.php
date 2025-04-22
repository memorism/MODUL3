<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group edit-note

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
                ->clickLink('Edit')
                ->assertPathIs('/edit-note-page/2')
                ->type('title', 'notes-edit')
                ->type('description', 'notes-edit')
                ->press('UPDATE');
        });
    }
}
