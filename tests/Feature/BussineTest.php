<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Bussine;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BussineTest extends TestCase
{
    use RefreshDatabase;
    
    function test_verify_that_the_setting_route_redirects_to_login_when_you_are_not_logged_in()
    {
        $response = $this->get('/setting');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    function test_to_verify_if_the_user_does_not_have_their_company_configured_redirect_to_configuration()
    {
        DB::table('users')->truncate();

        User::create([
            'bussine_id' => null,
            'name' => 'daniel vera',
            'email' => 'test@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'daniel vera',
            'email' => 'test@gmail.com'
        ]);

        $credentials = [
            'email' => 'test@gmail.com',
            'password' => '12345678'
        ];

        $this->post('/login', $credentials);
        $this->assertCredentials($credentials);
        $this->get('/dashboard')->assertRedirect('/setting');
    }

    function test_load_view_setting()
    {
        DB::table('users')->truncate();

        User::create([
            'bussine_id' => null,
            'name' => 'daniel vera',
            'email' => 'test@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'daniel vera',
            'email' => 'test@gmail.com'
        ]);

        $credentials = [
            'email' => 'test@gmail.com',
            'password' => '12345678'
        ];

        $this->post('/login', $credentials);
        $this->assertCredentials($credentials);
        $response = $this->get('/setting');
        $response->assertSee('Configuración General');
    }

}
