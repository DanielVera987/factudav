<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Bussine;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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
        $this->withoutExceptionHandling();

        DB::table('users')->truncate();

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
        $data = $this->from(route('settings.create'))
            ->post(route('settings.store'), [
            'bussine_name' => 'DavaDev',
            'tradename' => 'DavaDev',
            'rfc' => 'DAVA98762DA',
            'email' => 'test@gmail.com',
            'telephone' => '9999999999',
            'type_person' => 'F',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 8,
            'municipality_id' => 1080,
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => 'centificado',
            'key_private' => 'AAAAA',
            'password' => '1234A',
            'name_pac' => 'AAAA',
            'password_pac' => 'AAAA',
            'logo' =>  UploadedFile::fake()->image('photo1.jpg')
        ])->assertSessionMissing('Datos Guardados');

        $this->assertDatabaseHas('bussines', [
            'bussine_name' => 'DavaDev',
            'rfc' => "DAVA98762DA"
        ]);
    }

    function test_edit_company_user_relationship()
    {

        $this->withExceptionHandling();
        DB::table('users')->truncate();
        DB::table('bussines')->truncate();

        $nameFile = UploadedFile::fake()->image('photo1.jpg');

        Storage::fake('logo');
        
        $bussine = Bussine::factory()->create([
            'logo' => $nameFile->hashName()
        ]);
            
        dd($nameFile->hashName());

        User::create([
            'bussine_id' => $bussine->id,
            'name' => 'daniel vera',
            'email' => 'test@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $credentials = [
            'email' => 'test@gmail.com',
            'password' => '12345678'
        ];

        $this->post('/login', $credentials);
        $this->assertCredentials($credentials);

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'danielvera',
            'tradename' => 'DavaDev',
            'rfc' => 'DAVA98762DA',
            'email' => 'test@gmail.com',
            'telephone' => '9999999999',
            'type_person' => 'F',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 8,
            'municipality_id' => 1080,
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => 'centificado',
            'key_private' => 'AAAAA',
            'password' => '1234A',
            'name_pac' => 'AAAA',
            'password_pac' => 'AAAA',
            'logo' =>  $file
        ])->assertSessionMissing('Datos Guardados');
        
        $this->assertDatabaseHas('bussines', [
            'bussine_name' => 'danielvera'
        ]);
    }
}
