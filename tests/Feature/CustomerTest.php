<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\State;
use App\Models\Bussine;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Municipality;
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
        $response->assertStatus(200);
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

        Country::factory()->create();
        State::factory()->create();
        Municipality::factory()->create();

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

    function test_delete_customer() 
    {
        $this->markTestIncomplete();
        $customer = $this->authentication(false);

        $this->delete(route('customers.destroy', $customer->id));

        $this->assertDeleted($customer);
    }

    function test_create_customer()
    {
        $this->authentication();

        Country::factory()->create();
        State::factory()->create();
        Municipality::factory()->create();

        $this->post(route('customers.store'), [
            'bussine_name' => 'Davadev',
            'tradename' => 'Davadev software',
            'rfc' => 'XAXX010101000',
            'email' => 'davadev@gmail.com',
            'telephone' => '9999999999',
            'usecfdi_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'Cozumel',
            'street' => 'calle 1',
            'colony' => 'San miguel',
            'zip' => '77777',
            'no_exterior' => '0',
            'no_inside' => '0',
            'street_reference' => 'Ahi lejos'
        ])->assertRedirect(route('customers.index'))->assertSessionMissing('Cliente creado');

        $this->assertDatabaseHas('customers', [
            'bussine_name' => 'Davadev',
            'rfc' => 'XAXX010101000'
        ]);
    }

    function test_create_customer_error_bussine_name_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => '',
                'tradename' => 'Davadev software',
                'rfc' => 'XAXX010101000',
                'email' => 'davadev@gmail.com',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['bussine_name' => 'El campo Razón Social es obligatorio.']);
    }

    function test_create_customer_error_tradename_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => '',
                'rfc' => 'XAXX010101000',
                'email' => 'davadev@gmail.com',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['tradename' => 'El campo Nombre Comercial es obligatorio.']);
    }

    function test_create_customer_error_rfc_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'sdfsad',
                'rfc' => '',
                'email' => 'davadev@gmail.com',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['rfc' => 'El campo RFC es obligatorio.']);
    }

    function test_create_customer_error_email_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => '',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['email' => 'El campo Email es obligatorio.']);
    }

    function test_create_customer_error_telephone_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['telephone' => 'El campo Telefono es obligatorio.']);
    }

    function test_create_customer_error_usecfdi_id_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => null,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['usecfdi_id' => 'El campo Uso de CFDI es obligatorio.']);
    }

    function test_create_customer_error_country_id_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => null,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['country_id' => 'El campo País es obligatorio.']);
    }

    function test_create_customer_error_state_id_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => null,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['state_id' => 'El campo Estado es obligatorio.']);
    }

    function test_create_customer_error_municipality_id_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => null,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['municipality_id' => 'El campo Municipio es obligatorio.']);
    }

    function test_create_customer_error_location_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => '',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['location' => 'El campo Localidad es obligatorio.']);
    }

    function test_create_customer_error_street_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sdf',
                'street' => '',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['street' => 'El campo Calle es obligatorio.']);
    }

    function test_create_customer_error_colony_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sdf',
                'street' => 'sdfaf',
                'colony' => '',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['colony' => 'El campo Colonia es obligatorio.']);
    }

    function test_create_customer_error_zip_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sdf',
                'street' => 'sdfaf',
                'colony' => 'sfsdf',
                'zip' => '',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['zip' => 'El campo Código Postal es obligatorio.']);
    }

    function test_create_customer_no_exterior_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sdf',
                'street' => 'sdfaf',
                'colony' => 'sfsdf',
                'zip' => '4324',
                'no_exterior' => '',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['no_exterior' => 'El campo No. Exterior es obligatorio.']);
    }

    function test_create_customer_no_inside_require()
    {
        $this->authentication();

        $this->from(route('customers.create'))
                ->post(route('customers.store'), [
                'bussine_name' => 'davadev',
                'tradename' => 'safsaf',
                'rfc' => 'safsadf',
                'email' => 'sdfasf',
                'telephone' => '89789',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sdf',
                'street' => 'sdfaf',
                'colony' => 'sfsdf',
                'zip' => '4324',
                'no_exterior' => 'sdfsa',
                'no_inside' => '',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.create'))
              ->assertSessionHasErrors(['no_inside' => 'El campo No. Interior es obligatorio.']);
    }

    function test_update_customer()
    {
        //DB::table('customers')->truncate();
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->put(route('customers.update', $customer->id), [
            'bussine_name' => 'Davadev',
            'tradename' => 'Davadev software',
            'rfc' => 'XAXX010101000',
            'email' => 'davadev@gmail.com',
            'telephone' => '9999999999',
            'usecfdi_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'Cozumel',
            'street' => 'calle 1',
            'colony' => 'San miguel',
            'zip' => '77777',
            'no_exterior' => '0',
            'no_inside' => '0',
            'street_reference' => 'Ahi lejos'
        ])->assertRedirect(route('customers.index'))->assertSessionMissing('Cliente actulizado');

        $this->assertDatabaseHas('customers', [
            'bussine_name' => 'Davadev',
            'rfc' => 'XAXX010101000'
        ]);
    }

    function test_update_customer_error_bussine_name_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => '',
                'tradename' => 'Davadev software',
                'rfc' => 'XAXX010101000',
                'email' => 'davadev@gmail.com',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['bussine_name' => 'El campo Razón Social es obligatorio.']);
    }

    function test_update_customer_error_tradename_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => '',
                'rfc' => 'XAXX010101000',
                'email' => 'davadev@gmail.com',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['tradename' => 'El campo Nombre Comercial es obligatorio.']);
    }

    function test_update_customer_error_rfc_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => '',
                'email' => 'davadev@gmail.com',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['rfc' => 'El campo RFC es obligatorio.']);
    }

    function test_update_customer_error_email_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => '',
                'telephone' => '9999',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['email' => 'El campo Email es obligatorio.']);
    }

    function test_update_customer_error_telephone_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['telephone' => 'El campo Telefono es obligatorio.']);
    }

    function test_update_customer_error_usecfdi_id_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => null,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['usecfdi_id' => 'El campo Uso de CFDI es obligatorio.']);
    }

    function test_update_customer_error_country_id_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => null,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['country_id' => 'El campo País es obligatorio.']);
    }

    function test_update_customer_error_state_id_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => null,
                'municipality_id' => 1,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['state_id' => 'El campo Estado es obligatorio.']);
    }

    function test_update_customer_error_municipality_id_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => null,
                'location' => 'Cozumel',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['municipality_id' => 'El campo Municipio es obligatorio.']);
    }

    function test_update_customer_error_location_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => '',
                'street' => 'calle 1',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['location' => 'El campo Localidad es obligatorio.']);
    }

    function test_update_customer_error_street_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sfs',
                'street' => '',
                'colony' => 'San miguel',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['street' => 'El campo Calle es obligatorio.']);
    }

    function test_update_customer_error_colony_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sfs',
                'street' => 'sdfsd',
                'colony' => '',
                'zip' => '77777',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['colony' => 'El campo Colonia es obligatorio.']);
    }

    function test_update_customer_error_zip_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sfs',
                'street' => 'sdfsd',
                'colony' => 'dsfsdaf',
                'zip' => '',
                'no_exterior' => '0',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['zip' => 'El campo Código Postal es obligatorio.']);
    }

    function test_update_customer_error_no_exterior_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sfs',
                'street' => 'sdfsd',
                'colony' => 'dsfsdaf',
                'zip' => 'sdfdsaf',
                'no_exterior' => '',
                'no_inside' => '0',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['no_exterior' => 'El campo No. Exterior es obligatorio.']);
    }

    function test_update_customer_error_no_inside_require()
    {
        $this->authentication();

        $customer = Customer::factory()->create();

        $this->from(route('customers.edit',  $customer->id))
                ->put(route('customers.update',  $customer->id), [
                'bussine_name' => 'sdfsadf',
                'tradename' => 'sadfsadf',
                'rfc' => 'sfsda',
                'email' => 'A@GMAIL.COM',
                'telephone' => '98899898',
                'usecfdi_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'municipality_id' => 1,
                'location' => 'sfs',
                'street' => 'sdfsd',
                'colony' => 'dsfsdaf',
                'zip' => 'sdfdsaf',
                'no_exterior' => '0',
                'no_inside' => '',
                'street_reference' => 'Ahi lejos'
            ])->assertRedirect(route('customers.edit',  $customer->id))
              ->assertSessionHasErrors(['no_inside' => 'El campo No. Interior es obligatorio.']);
    }

    function test_view_edit_customer()
    {
        DB::table('customers')->truncate();
        $this->authentication();

        $customer = Customer::factory()->create();

        $response = $this->get(route('customers.edit', $customer->id));
        $response->assertStatus(200)
                ->assertSee('Actualizar Cliente')
                ->assertSee($customer->bussine_name);
    }

    protected function authentication($bussine = 1)
    {
        DB::table('users')->truncate();
        
        $bussine = Bussine::factory()->create();
        $bussine = ($bussine != null) ? $bussine->id : null;
        
        $customer = User::create([
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

        return $customer;
    }
}
