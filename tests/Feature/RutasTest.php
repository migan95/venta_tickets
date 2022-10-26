<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RutasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRutaBase()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function testPaginaLoginUp(){
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testUsuarioAutenticado(){
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/eventos');
        $response->assertStatus(200);
    }

    public function testUsuarioNoAutenticado(){
        $response = $this->get('/eventos');
        $response->assertStatus(302);
    }
}
