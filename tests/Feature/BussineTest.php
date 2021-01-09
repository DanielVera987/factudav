<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Bussine;

class BussineTest extends TestCase
{
    use RefreshDatabase;

    function test_load_raiz()
    {
        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertSee('Login');
    }

    //Logic

    //Views

    //Routes
}
