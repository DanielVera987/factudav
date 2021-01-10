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

    function test_load_route_setting()
    {
        $response = $this->get('/setting');
        $response->assertStatus(200);
    }
}
