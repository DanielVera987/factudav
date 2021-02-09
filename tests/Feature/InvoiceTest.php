<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvoiceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_load_view_index_with_redirect_login()
    {
        $response = $this->get('/invoices');
        $response->assertStatus(302)
            ->assertRedirect('/login');
    }

    public function test_load_view_index()
    {
        $this->authentication();
        
        $response = $this->get('/invoices');
        $response->assertStatus(200);
    }
    
    public function test_create_invoice()
    {
        $this->withoutExceptionHandling();
        DB::table('invoices')->truncate();

        Product::factory(10)->create();
        $this->authentication();
        
        $response = $this->post(route('invoices.store'), [
            'folio' => '0000000003',
            'way_to_pay' => 1,
            'currency_id' => 1,
            'payment_method_id' => 1,
            'usecfdi' => 1,
            'date' => '23-08-13',
            'customer_id' => 1,
            'product_id' => [
                '1',
                '2'   
            ],
            'prodserv_id' => [
                2,
                3
            ],
            'key_unit_id' => [
                2,
                3
            ],
            'description' => [
                'cocacola bien fria',
                'pepsi bien fria'
            ],
            'quantity' => [
                1,
                2
            ],
            'discount' => [
                1,
                1
            ],
            'amount' => [
                30,
                25
            ],
        ]);

        $this->assertDatabaseHas('invoices', [
            'folio' => '0000000003'
        ]);

        $this->assertDatabaseHas('details', [
            'invoice_id' => 1,
            'description' => 'cocacola bien fria'
        ]);

        $this->assertDatabaseHas('details', [
            'invoice_id' => 1,
            'description' => 'pepsi bien fria'
        ]);

        $response->assertStatus(302)
            ->assertRedirect(route('invoices.index'))
            ->assertSee('Factura creada');
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
