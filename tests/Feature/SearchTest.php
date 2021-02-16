<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\ProduServ;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_verify_route_get_json_units_without_autenticate()
    {
        $response = $this->get('/searchUnit');

        $response->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_verify_route_get_json_units_with_autenticate()
    {
        $this->authentication();
        $response = $this->get('/searchUnit');

        $response->assertStatus(200);
    }

    public function test_get_json_units_with_autenticate()
    {
        $this->authentication();
        $response = $this->get('/searchUnit/?q=pieza');

        $response->assertStatus(200)
            ->assertSee('[');
    }

    public function test_verify_route_get_json_customers_without_autenticate()
    {
        $response = $this->get('/searchCustomers');

        $response->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_verify_route_get_json_customers_with_autenticate()
    {
        $this->authentication();
        $response = $this->get('/searchCustomers');

        $response->assertStatus(200);
    }

    public function test_get_json_customers_with_autenticate()
    {
        $this->authentication();
        Customer::factory()->create([
            'bussine_name' => 'davadev'
        ]);

        $response = $this->get('/searchCustomers/?q=davadev');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'bussine_name' => 'davadev'
            ]);
    }

    public function test_verify_route_get_json_searchProduServ_without_autenticate()
    {
        $response = $this->get('/searchProduServ');

        $response->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_verify_route_get_json_searchProduServ_with_autenticate()
    {
        $this->authentication();
        $response = $this->get('/searchProduServ');

        $response->assertStatus(200);
    }

    public function test_get_json_searchProduServ_with_autenticate()
    {
        $this->authentication();
        ProduServ::create([
            'code' => '01010102',
            'name' => 'publico'
        ]);

        $response = $this->get('/searchProduServ/?q=publico');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'code' => '01010102'
            ]);
    }
    
    public function test_verify_route_get_json_searchProduct_without_autenticate()
    {
        $response = $this->get('/searchProducts');

        $response->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_verify_route_get_json_searchProduct_with_autenticate()
    {
        $this->authentication();
        $response = $this->get('/searchProducts');

        $response->assertStatus(200);
    }

    public function test_get_json_searchProduct_with_autenticate()
    {
        $this->withoutExceptionHandling();
        $this->authentication();
        DB::table('products')->truncate();

        $pro = Product::factory()->create([
            "name"=> "coca",
            "description" => "Maiores doloremque temporibus delectus accusamus earum autem at quaerat est vel voluptas.",
            "price" => "442.458832"
        ]);

        $response = $this->get('/searchProducts/?q=coca');

        $response->assertStatus(200)
            ->assertJsonFragment([
                "id" => $pro->id,
                "name"=> "coca",
                "description" => "Maiores doloremque temporibus delectus accusamus earum autem at quaerat est vel voluptas.",
                "price" => "442.458832"
            ]);
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
