<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    function test_index_loading_with_authetication()
    {
        $this->authentication();

        $response = $this->get('/customers');
        $response->assertStatus(200);
    }

    function test_index_loading_with_authentication_but_without_bussine()
    {
        $this->authentication(null);

        $response = $this->get('/customers');
        $response->assertStatus(302);
    }

    function test_index_loading_without_authentication()
    {
        $response = $this->get('/customers');
        $response->assertRedirect(route('login'));
    }

    function test_load_view_index()
    {
        $this->authentication();

        $response = $this->get('/customers');
        $response->assertSee('Listado De Clientes');
    }

    function test_verify_user_list()
    {
        $this->authentication();

        Customer::create([  
            'bussine_id' => 1,
            'bussine_name' => 'davadev',
            'tradename' => 'davadev',
            'rfc' => 'DAVADEV250898',
            'email' => 'danielveraangulo703@gmail.com',
            'telephone' => '9875649963',
            'usecfdi_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'cozumel',
            'street' => 'calle 41',
            'colony' => 'ctm',
            'zip' => '77666',
            'no_exterior' => '0',
            'no_inside' => '0',
            'street_reference' => 'casa cafe conmuchas aguilas',
            'type' => 1,
        ]);

        $this->assertDatabaseHas('customers', [
            'bussine_name' => 'davadev',
            'email' => 'danielveraangulo703@gmail.com'
        ]);

        $response = $this->get('/customers');
        $response->assertSee(['davadev', 'danielveraangulo703@gmail.com']);
    }

    protected function authentication($bussine = 1)
    {
        DB::table('users')->truncate();

        User::create([
            'bussine_id' => $bussine,
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
    }
}