<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    function test_load_route()
    {
        $response = $this->get('/customers');
        $response->assertStatus(200);
    }

    function test_load_view_index()
    {
        $response = $this->get('/customers');
        $response->assertSee('Listado De Clientes');
    }
}
