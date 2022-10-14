<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = User::factory()->create();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->click('@boton-login')
                ->assertPathIs('/');
        });
    }

    public function testLogout(){
        $this->browse(function ($browser) {
            $browser->visitRoute('logout')
                ->assertPathIs('/login');
        });
    }
}
