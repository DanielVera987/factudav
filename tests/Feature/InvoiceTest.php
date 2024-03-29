<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Unit;
use App\Models\User;
use App\Models\State;
use App\Models\Detail;
use App\Models\Bussine;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use App\Models\ProduServ;
use App\Models\Municipality;
use App\Models\PaymentMethod;
use App\Models\Usecfdi;
use App\Models\WayToPay;
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
        $response->assertStatus(200)
            ->assertSee('Listado De Facturas');
    }

    public function test_verity_generate_folio_for_invoice_with_invoices()
    {
        Bussine::factory()->create();
        $this->generateData();
        
        Customer::factory()->create();
        $this->authentication();

        Invoice::create([
            'bussine_id' => 1,
            'serie' => 'factura-',
            'folio' => 10,
            'way_to_pay_id' => 1,
            'currency_id' => 1,
            'payment_method_id' => 1,
            'usecfdi_id' => 1,
            'date' => '2020-02-21T01:18:00',
            'customer_id' => 1,
            'name_file' => 'name_file.xml',
            'type_voucher' => 'I',
            'status' => 'Unpaid'
        ]);

        $folio = Invoice::generateFolio();
        $this->assertSame($folio, '0000000011');
    }

    public function test_verity_generate_folio_for_invoice_without_invoices()
    {
        Bussine::factory()->create();
        $this->generateData();

        $this->authentication();
        //DB::table('invoices')->truncate();

        $folio = Invoice::generateFolio();
        $this->assertSame($folio, $folio);
    }

    public function test_create_invoice_with_repeat_folio()
    {
        Bussine::factory()->create();
        $this->generateData();
        $this->authentication();

        Invoice::create([
            'bussine_id' => 1,
            'serie' => 'Factura-',
            'folio' => '0000000001',
            'way_to_pay_id' => 1,
            'currency_id' => 1,
            'payment_method_id' => 1,
            'usecfdi_id' => 1,
            'date' => '2020-02-21T01:18:00',
            'customer_id' => 1,
            'name_file' => 'name_file.xml',
            'status' => 'Unpaid',
            'type_voucher' => 'I'
        ]);
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'FAC-',
                'folio' => '0000000001',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'))
        ->assertSessionMissing(['warning' => 'El folio ya esta en uso']);
    }
    
    public function test_create_invoice()
    {
        $b = Bussine::factory()->create([
            'rfc' => 'CACX7605101P8',
            'password' => '12345678a',
            'certificate' => 'CACX7605101P8_test.cer',
            'key_private' => 'CACX7605101P8_test.key'
        ]);
            
        $this->generateData();
        $this->authentication($b->id);

        $response = $this->post(route('invoices.store'), [
            "serie" => "Factura-",
            "way_to_pay_id" => "1",
            "currency_id" => "1",
            "folio" => "0000000004",
            "payment_method_id" => "1",
            "usecfdi_id" => "1",
            "date" => "2021-04-12T13:59:37",
            "type_voucher" => "I",
            "customer_id" => "1",
            "detail" => [
                0 => [
                    "discount" => "0",
                    "amount" => "32.00",
                    "product_id" => "0",
                    "prodserv_id" => "1",
                    "unit_id" => "1",
                    "description" => "coca bien fria",
                    "quantity" => "1"
                //"taxes" => array:1 [ …1]
                ]
            ]
        ]);

        //dd($response);

        $this->assertDatabaseHas('invoices', [
            'folio' => '0000000004'
        ]);

        $response->assertRedirect(route('invoices.index'))
        ->assertSessionMissing(['success' => 'Producto Actualizado']);
    }

    public function test_create_invoice_error_required_serie()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => '',
                'folio' => '0000000003',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'serie' => 'El campo serie es obligatorio.'
        ]);
    }

    public function test_create_invoice_error_required_folio()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sf',
                'folio' => '',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

            $response->assertRedirect(route('invoices.create'));
            $response->assertSessionHasErrors([
                'folio' => 'El campo folio es obligatorio.'
            ]);
    }

    public function test_create_invoice_error_required_way_to_pay()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => null,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'way_to_pay_id' => 'La forma de pago es requerido'
        ]);
    }

    public function test_create_invoice_error_required_currency_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => null,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'currency_id' => 'El campo moneda es requerido'
        ]);
    }

    public function test_create_invoice_error_required_payment_method_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();
        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => null,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'payment_method_id' => 'El campo metodo de pago es requerido'
        ]);
    }

    public function test_create_invoice_error_required_usecfdi_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => null,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'usecfdi_id' => 'El campo uso del cfdi es requerido'
        ]);
    }

    public function test_create_invoice_error_in_format_date()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'date' => 'El campo fecha debe tener un formato YYYY-MM-DDTHH:MM:SS'
        ]);
    }

    public function test_create_invoice_error_requerid_date()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'date' => 'El campo fecha debe tener un formato YYYY-MM-DDTHH:MM:SS'
        ]);
    }

    public function test_create_invoice_error_requerid_customer_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => null,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'customer_id' => 'El campo cliente es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail' => 'Es necesario agregar minimo un concepto'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_discount()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.discount' => 'El campo en el concepto descuento es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_amount()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        //'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.amount' => 'El campo en el concepto precio es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_product_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();
        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        //'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.product_id' => 'El campo en el concepto producto es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_prodserv_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        //'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.prodserv_id' => 'El campo en el concepto producto/servicio es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_unit_id()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        //'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.unit_id' => 'El campo en el concepto clave unidad es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_description()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        //'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.description' => 'El campo en el concepto descripción es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_quantity()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        //'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.quantity' => 'El campo en el concepto cantidad es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_taxes_type()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                //'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.taxes.0.type' => 'El campo en el impuesto tipo es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_taxes_factor()
    {
        //$this->withoutExceptionHandling();
        $this->generateData();

        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                //'factor' => 1,
                                'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.taxes.0.factor' => 'El campo en el impuesto factor es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_taxes_tax()
    {
        $this->generateData();
        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                //'tax' => 1,
                                'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.taxes.0.tax' => 'El campo en el impuesto impuesto es requerido'
        ]);
    }

    public function test_create_invoice_error_requerid_detail_taxes_id()
    {
        $this->generateData();
        $this->authentication();
        
        $response = $this->from(route('invoices.create'))
            ->post(route('invoices.store'), [
                'serie' => 'sfs',
                'folio' => '000002',
                'way_to_pay_id' => 1,
                'currency_id' => 1,
                'payment_method_id' => 1,
                'usecfdi_id' => 1,
                'date' => '2021-08-13T12:00:00',
                'customer_id' => 1,
                'detail' => [
                    0 => [
                        'discount' =>  0,
                        'amount' => 30,
                        'product_id' => 1,
                        'prodserv_id' => 1,
                        'unit_id' => 2,
                        'description' => 'cocacola bien fria',
                        'quantity' => 1,
                        'taxes' => [
                            0 => [
                                'type' => 1,
                                'factor' => 1,
                                'tax' => 1,
                                //'id' => 1
                            ]
                        ]
                    ]
                ]
            ]);

        $response->assertRedirect(route('invoices.create'));
        $response->assertSessionHasErrors([
            'detail.0.taxes.0.id' => 'El campo en el impuesto id es requerido'
        ]);
    }

    public function test_functio_createCFDI()
    {
        $this->markTestIncomplete();
    }

    public function test_functio_preparingHead()
    {
        $this->markTestIncomplete();
    }

    public function test_functio_preparingEmitor()
    {
        $this->markTestIncomplete();
    }

    public function test_functio_preparingReceptor()
    {
        $this->markTestIncomplete();
    }

    public function test_functio_preparingConcept()
    {
        $this->markTestIncomplete();
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
        Customer::factory()->create();
    }
}
