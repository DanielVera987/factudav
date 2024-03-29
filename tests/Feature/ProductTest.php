<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Unit;
use App\Models\User;
use App\Models\State;
use App\Models\Bussine;
use App\Models\Country;
use App\Models\Product;
use App\Models\Usecfdi;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\WayToPay;
use App\Models\ProduServ;
use App\Models\Municipality;
use App\Models\PaymentMethod;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $response->assertStatus(302)
            ->assertRedirect('/login');
    }

    public function test_load_view_index_product_with_autentication()
    {
        $this->withExceptionHandling();
        //DB::table('products')->truncate();

        $this->authentication();

        $bussine = Bussine::factory()->create();
        ProduServ::create([
            'code' => '0000000000',
            'name' => 'NAMETEST',
            'start_date_validity' => '',
            'end_date_validity' => '',
            'similarwords' => '',
        ]);
        
        Unit::create([
            'code' => 'H48',
            'name' => 'Services',
            'simbol' => '',
            'description' => ''
        ]);

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
        $this->authentication();
        $response = $this->get(route('products.create'));

        $response->assertStatus(200)
            ->assertSee('Nuevo Producto');
    }

    public function test_create_product()
    {
        $this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->post(route('products.store'), [
            'code' => '001',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 2,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => $file,
            'is_active' => '0'
        ]);

        Storage::disk('products')->assertExists(time().'_'.'avatar.jpg');
        
        $this->assertDatabaseHas('products', [
            'code' => '001'
        ]);
    }  

    public function test_create_product_error_code_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                //'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['code' => 'El campo Code es obligatorio.']);
    } 

    public function test_create_product_error_name_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                //'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['name' => 'El campo Nombre es obligatorio.']);
    } 

    public function test_create_product_error_description_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                //'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['description' => 'El campo Descripción es obligatorio.']);
    } 

    public function test_create_product_error_stock_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => null,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['stock' => 'El campo Stock es obligatorio.']);
    }

    public function test_create_product_error_alert_stock_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => null,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['alert_stock' => 'El campo Alerta Stock es obligatorio.']);
    }

    public function test_create_product_error_cost_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 7,
                //'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['cost' => 'El campo Costo es obligatorio.']);
    }

    public function test_create_product_error_price_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 7,
                'cost' => 30.00,
                //'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['price' => 'El campo Precio es obligatorio.']);
    }

    public function test_create_product_error_produserv_id_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 7,
                'cost' => 30.00,
                'price' => 30.00,
                //'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['produserv_id' => 'El campo Producto/Servicio es obligatorio.']);
    }

    public function test_create_product_error_unit_id_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 7,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                //'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['unit_id' => 'El campo Unidad de Medida es obligatorio.']);
    }

    public function test_create_product_error_image_require()
    {
        //$this->withoutExceptionHandling();
        $this->authentication();

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 7,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                //'image' => $file,
                'is_active' => '0'
            ]);

        $response->assertRedirect(route('products.create'))
            ->assertSessionHasErrors(['image' => 'El campo Imagen es obligatorio.']);
    }

    public function test_create_product_warning_stock_less_alert_stock()
    {
        $this->withoutExceptionHandling();
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '00200',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 11,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ])->assertRedirect(route('products.create'))
            ->assertSessionHas(['warning' => 'El stock debe ser mayor a la alerta de stock']);
    }

    public function show_product()
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
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ]);

        $this->get(route('products.show', $product->id));
    }

    public function test_update_product_error_code_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                //'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['code' => 'El campo Code es obligatorio.']);
    }

    public function test_update_product_error_name_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                //'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['name' => 'El campo Nombre es obligatorio.']);
    }

    public function test_update_product_error_description_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                //'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['description' => 'El campo Descripción es obligatorio.']);
    }

    public function test_update_product_error_stock_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                //'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['stock' => 'El campo Stock es obligatorio.']);
    }

    public function test_update_product_error_alert_stock_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                //'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['alert_stock' => 'El campo Alerta Stock es obligatorio.']);
    }

    public function test_update_product_error_cost_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                //'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['cost' => 'El campo Costo es obligatorio.']);
    }

    public function test_update_product_error_price_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                //'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['price' => 'El campo Precio es obligatorio.']);
    }

    public function test_update_product_error_produserv_id_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                //'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['produserv_id' => 'El campo Producto/Servicio es obligatorio.']);
    }

    public function test_update_product_error_unit_id_require()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $response = $this->from(route('products.edit', $product->id))
            ->put(route('products.update', $product->id), [
                'code' => '001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                //'unit_id' => 1,
                'image' => $image,
                'is_active' => '0'
            ]);
        
        $response->assertRedirect(route('products.edit', $product->id))
            ->assertSessionHasErrors(['unit_id' => 'El campo Unidad de Medida es obligatorio.']);
    }

    public function test_product_update_without_image()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => '',
            'is_active' => '0'
        ]);

        $this->put(route('products.update', $product->id), [
            'code' => '00200',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'is_active' => '0'
        ])->assertRedirect(route('products.index'))
          ->assertSessionMissing(['success' => 'Producto Actualizado']);

        $this->assertDatabaseHas('products', [
            'code' => '00200'
        ]);
    }

    public function test_product_update_with_image()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        $product = Product::create([
            'bussine_id' => 1,
            'code' => '00100',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 'default.png',
            'is_active' => '0'
        ]);

        Storage::fake('products');

        $image = UploadedFile::fake()->image('avatar.png');

        $this->put(route('products.update', $product->id), [
            'code' => '0000000009',
            'name' => 'coca',
            'description' => 'refresco',
            'stock' => 10,
            'alert_stock' => 5,
            'cost' => 30.00,
            'price' => 30.00,
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => $image,
            'is_active' => '0'
        ])->assertRedirect(route('products.index'))
          ->assertSessionMissing(['success' => 'Producto Actualizado']);

        Storage::disk('products')->assertExists(time().'_'.'avatar.png');

        $this->assertDatabaseHas('products', [
            'code' => '0000000009'
        ]);
    }

    public function test_destroy_product()
    {
        Bussine::factory()->create();
        $this->generateData();
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
            'produserv_id' => 1,
            'unit_id' => 1,
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
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => 1,
            'is_active' => '0'
        ])->assertRedirect(route('products.index'))
          ->assertSessionMissing(['success' => 'Producto Eliminado']);

        $this->assertDeleted($product);
    }

    public function test_function_generate_folio_without_products()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        Bussine::factory()->create(); 
        
        $folio = Product::generateFolio();
        $this->assertSame($folio, $folio);
    }

    public function test_function_generate_folio_with_products()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        Bussine::factory()->create();
        Product::factory(5)->create();

        $folio = Product::generateFolio();
        $this->assertSame($folio, $folio);
    }

    public function test_create_product_with_repeat_code()
    {
        Bussine::factory()->create();
        $this->generateData();

        $this->authentication();

        Bussine::factory()->create();
        Product::factory()->create([
            'code' => '0000000001'
        ]);

        Storage::fake('products');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->from(route('products.create'))
            ->post(route('products.store'), [
                'code' => '0000000001',
                'name' => 'coca',
                'description' => 'refresco',
                'stock' => 10,
                'alert_stock' => 2,
                'cost' => 30.00,
                'price' => 30.00,
                'produserv_id' => 1,
                'unit_id' => 1,
                'image' => $file,
                'is_active' => '0'
            ]);
            
        $response->assertRedirect(route('products.create'))
                ->assertSessionHas(['warning' => 'El codigo del producto ya esta en uso']);
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
