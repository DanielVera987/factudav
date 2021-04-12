<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Unit;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Product;
use App\Models\Usecfdi;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\WayToPay;
use App\Models\ProduServ;
use App\Models\Municipality;
use App\Models\PaymentMethod;
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
        $this->generateData();
        $this->authentication();
        $response = $this->get('/searchProduServ');

        $response->assertStatus(200);
    }

    public function test_get_json_searchProduServ_with_autenticate()
    {
        $this->generateData();
        $this->authentication();

        $response = $this->get('/searchProduServ/?q=No existe');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'code' => '01010101'
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
        //DB::table('products')->truncate();

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

    protected function generateData()
    {
        Country::create([
            'name' => 'Mexico',
            'abbreviation' => 'MXN'
        ]);

        State::create([
            'country_id' => 1,
            'name' => 'Quintana Roo',
            'abbreviation' => 'Q. Roo'
        ]);

        Municipality::create([
            'state_id' => 1,
            'name' => 'Tulum'
        ]);
        WayToPay::factory()->create();
        Currency::factory()->create();
        PaymentMethod::factory()->create();
        Usecfdi::create([
            'code' => 'G01',
            'name' => 'Adquisición de mercancias'
        ]);
        Unit::create([
            "code" => "18",
            "name" => "Tambor de cincuenta y cinco galones (EUA)",
        ]);
        ProduServ::create([
            "code"=> "01010101",
            "name"=> "No existe en el catálogo",
            "start_date_validity"=> "07-01-2019",
            "end_date_validity"=> "",
            "similarwords"=> "Público en general"
          ]);
        Customer::factory()->create();
    }
}
