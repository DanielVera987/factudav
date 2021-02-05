<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Bussine;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{

    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_load_view_index_product_without_autentication()
    {
        $response = $this->get('/products');
        $response->assertStatus(302)->assertRedirect(route('login'));
    }

    public function test_load_view_index_product_with_autentication()
    {
        $this->authentication();

        $bussine = Bussine::factory()->create();
        Product::factory()->create([
            'bussine_id' => $bussine->id,
            'name' => 'coca'
        ]);

        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function test_create_product()
    {
        $this->authentication();

        $this->post(route('products.store'), [
            'name' => 'coca',
            'description' => 'refresco',
            'code' => '001',
            'stock' => '10',
            'amount' => '30.00',
            'image' => ''
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
