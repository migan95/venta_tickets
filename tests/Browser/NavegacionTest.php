<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavegacionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testNavegacionLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSeeIn('@titulo-login','Bienvenido!');
        });
    }

    public function testNavegacionNoAutenticado(){

        $user = User::factory()->create();

        $this->browse(function (Browser $browser){
            $browser->visit('/eventos')
                ->assertPathIs('/login');
        });
    }

    public function testNavegacionAutenticado(){


        $this->browse(function (Browser $browser){
            $browser->visit('/eventos')
                ->assertPathIs('/login');
        });
    }
}
