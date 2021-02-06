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
        $this->withExceptionHandling();
        $this->authentication();

        $bussine = Bussine::factory()->create();
        Product::factory()->create([
            'bussine_id' => $bussine->id,
            'name' => 'coca'
        ]);

        $response = $this->get('/products');
        $response->assertStatus(200)
            ->assertSee('Listado De Productos');
    }

    public function test_load_view_create_product()
    {
        $response = $this->get(route('products.create'));

        $response->assertStatus(200)
            ->assertSee('Crear producto');
    }

    public function test_create_product()
    {
        $this->authentication();

        $response = $this->post(route('products.store'), [
            'code' => '001',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 10,
            'cost' => 30.00,
            'price' => 30.00,
            'tax_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->assertDatabaseHas('products', [
            'code' => '001'
        ]);
    }

    public function test_show_product()
    {
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '001',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 10,
            'cost' => 30.00,
            'price' => 30.00,
            'tax_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->get(route('products.show', $product->id));
    }

    public function test_update_product()
    {
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '001',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 10,
            'cost' => 30.00,
            'price' => 30.00,
            'tax_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->put(route('products.update', $product->id), [
            'bussine_id' => 1,
            'code' => '002',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 10,
            'cost' => 30.00,
            'price' => 30.00,
            'tax_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->assertDatabaseHas('products', [
            'code' => '002'
        ]);
    }

    public function test_destroy_product()
    {
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '001',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 10,
            'cost' => 30.00,
            'price' => 30.00,
            'tax_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->delete(route('products.destroy', $product->id), [
            'bussine_id' => 1,
            'code' => '002',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 10,
            'cost' => 30.00,
            'price' => 30.00,
            'tax_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->assertDeleted($product);
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
