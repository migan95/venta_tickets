<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Clasificacion;

class ClasificacionesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListarClasificacionesAdministrador()
    {
        $user = User::factory()->make([
            'role' => 1
        ]);
        $item = Clasificacion::factory()->create();

        $this
            ->actingAs($user)
            ->get('/clasificacions')
            ->assertSee($item->nombre);
    }
    public function testListarClasificacionesUsuarioNormal()
    {
        $user = User::factory()->make([
            'role' => 2
        ]);
        $item = Clasificacion::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/clasificacions');

        $response->assertStatus(403);
    }
    public function testListarClasificacionesEmpresa()
    {
        $user = User::factory()->make([
            'role' => 3
        ]);
        $item = Clasificacion::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/clasificacions');

        $response->assertStatus(403);
    }
}
