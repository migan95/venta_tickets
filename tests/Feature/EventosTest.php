<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Evento;

class EventosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListarEventosAdministrador()
    {
        $user = User::factory()->make([
            'role' => 1
        ]);
        $item = Evento::factory()->create();

        $this
            ->actingAs($user)
            ->get('/eventos')
            ->assertSee($item->nombre);
    }
    public function testListarEventosUsuarioNormal()
    {
        $user = User::factory()->make([
            'role' => 2
        ]);
        $item = Evento::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/eventos');

        $response->assertStatus(403);
    }
    public function testListarEventosEmpresa()
    {
        $user = User::factory()->make([
            'role' => 3
        ]);
        $item = Evento::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/eventos');

        $response->assertStatus(403);
    }
}
