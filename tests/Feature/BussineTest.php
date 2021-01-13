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
        $response = $this->get(route('settings.create'));
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
        $this->get('/dashboard')->assertRedirect(route('settings.create'));
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
        $response = $this->get(route('settings.create'));
        $response->assertSee('Configuración General');
    }

    function test_create_company_user_relationship()
    {
        DB::table('users')->truncate();
        $this->withoutExceptionHandling();

        $user = User::create([
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

        //hacer un post en settings.create
        $this->post(route('settings.store'), [
            'bussine_name' => 'DavaDev',
            'tradaname' => 'DavaDev',
            'rfc' => 'DAVA98762DA',
            'email' => 'test@gmail.com',
            'phone' => '9999999999',
            'type_person' => 'F',
            'taxregimen' => '1',
            'country' => 'Mexico',
            'state' => 'Quintana Roo',
            'municipality' => 'Cozumel',
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'noexterior' => '0',
            'nointerior' => '0',
            'certificate' => 'centificado',
            'privatekey' => 'AAAAA',
            'password' => '1234A',
            'name_pac' => 'AAAA',
            'password_pac' => 'AAAA',
            'logo' => 'logo.png'
        ])->assertRedirect(route('settings.create'))
          ->assertSessionMissing('Datos Guardados');

        $this->assertDatabaseHas('bussines', [
            'bussine_name' => 'DavaDev',
            'rfc' => "DAVA98762DA"
        ]);
    }
}
