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
        //$this->withoutExceptionHandling();
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
            'rfc' => 'CACX7605101P8',
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
            'folio' => 1,
            'serie' => 'Factura-',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
            'code_currency' => [
                'MXN'
            ],
            'name_currency' => [
                'Pesos Mexicanos'
            ],
            'type_currency' => [
                '1.0'
            ],
            'logo' =>  UploadedFile::fake()->image('photo1.jpg')
        ])->assertSessionMissing('Datos Guardados');

        //dd($data);
        $this->assertDatabaseHas('bussines', [
            'bussine_name' => 'DavaDev',
            'rfc' => "CACX7605101P8"
        ]);
    }

    function test_create_company_with_certificate_and_key(){
        $this->markTestIncomplete();
    }

    function test_uploadFileCer(){
        $this->markTestIncomplete();
    }

    function test_uploadFileKey(){
        $this->markTestIncomplete();
    }

    function test_createCertificatePem(){
        $this->markTestIncomplete();
    }

    function test_createKeyPem(){
        $this->markTestIncomplete();
    }

    function test_edit_company_user_relationship()
    {
        //$this->markTestIncomplete();
        //$this->withExceptionHandling();
        //DB::table('bussines')->truncate();
        
        $bussine = Bussine::factory()->create();  

        $this->authentication($bussine->id);

        $file = UploadedFile::fake()->image('photo1.jpg');

        $res = $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'danielvera',
            'tradename' => 'DavaDev',
            'rfc' => 'CACX7605101P8',
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
            'folio' => 1,
            'serie' => 'Factura-',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
            //'logo' =>  UploadedFile::fake()->image('photo1.jpg')
        ])->assertSessionMissing('Datos Guardados');
        //dd($res);
        
        $this->assertDatabaseHas('bussines', [
            'bussine_name' => 'danielvera'
        ]);
    }

    function test_edit_company_user_relationship_error_bussine_name_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => '',
            'tradename' => 'DavaDev',
            'rfc' => 'CACX7605101P8',
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
            'folio' => 1,
            'serie' => 'Factura-',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['bussine_name' => 'El campo Razón Social  es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_tradename_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => '',
            'rfc' => 'CACX7605101P8',
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
            'folio' => 1,
            'serie' => 'Factura-',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['tradename' => 'El campo Nombre Comercial  es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_rfc_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => '',
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
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['rfc' => 'El campo RFC es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_email_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => '',
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
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['email' => 'El campo Correo Electrónico es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_telephone_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '',
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
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['telephone' => 'El campo Teléfono  es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_type_person_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => '',
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
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['type_person' => 'El campo Tipo Persona es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_taxregimen_id_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => null,
            'country_id' => 1,
            'state_id' => 8,
            'municipality_id' => 1080,
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['taxregimen_id' => 'El campo Régimen Fiscal es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_country_id_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => null,
            'state_id' => 8,
            'municipality_id' => 1080,
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['country_id' => 'El campo País es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_state_id_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => null,
            'municipality_id' => 1080,
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['state_id' => 'El campo Estado es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_municipality_id_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => null,
            'location' => 'Cozumel',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['municipality_id' => 'El campo Municipio es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_location_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => '',
            'street' => 'Calle 41',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['location' => 'El campo Localidad es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_street_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'ad',
            'street' => '',
            'colony' => 'CTM',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['street' => 'El campo Calle es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_colony_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'ad',
            'street' => 'sfsdf',
            'colony' => '',
            'zip' => '8888',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['colony' => 'El campo Colonia es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_zip_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'ad',
            'street' => 'sfsdf',
            'colony' => 'sdfs',
            'zip' => '',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['zip' => 'El campo Código Postal es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_no_exterior_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'ad',
            'street' => 'sfsdf',
            'colony' => 'sdfs',
            'zip' => 'sdfsdf',
            'no_exterior' => '',
            'no_inside' => '0',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['no_exterior' => 'El campo No. Exterior es obligatorio.']);
    }

    function test_edit_company_user_relationship_error_no_inside_require()
    {
        //$this->markTestIncomplete();
        //DB::table('bussines')->truncate();
        $bussine = Bussine::factory()->create();           
        $this->authentication($bussine->id);
        $this->withExceptionHandling();
        

        $file = UploadedFile::fake()->image('photo1.jpg');

        $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'sdfsdf',
            'tradename' => 'sdfsf',
            'rfc' => 'sdfsdaf',
            'email' => 'a@gmail.com',
            'telephone' => '9999999',
            'type_person' => 'f',
            'taxregimen_id' => 1,
            'country_id' => 1,
            'state_id' => 1,
            'municipality_id' => 1,
            'location' => 'ad',
            'street' => 'sfsdf',
            'colony' => 'sdfs',
            'zip' => 'sdfsdf',
            'no_exterior' => '0',
            'no_inside' => '',
            'certificate' => storage_path().'/app/public/csd_sat/cer/CACX7605101P8_test.cer',
            'key_private' => storage_path().'/app/public/csd_sat/key/CACX7605101P8_test.key',
            'password' => '12345678a',
            'name_pac' => 'DEMO700101XXX',
            'password_pac' => 'DEMO700101XXX',
            'production_pac' => 'NO',
        ])->assertSessionHasErrors(['no_inside' => 'El campo No. Interior es obligatorio.']);
    }

    function test_edit_company_user_relationship_with_currencies_and_taxies()
    {
        //$this->markTestIncomplete();
        //$this->withoutExceptionHandling();
        DB::table('users')->truncate();
        //DB::table('bussines')->truncate();
        
        $bussine = Bussine::factory()->create();           

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

        $re = $this->put(route('settings.update', $bussine->id), [
            'bussine_name' => 'danielvera',
            'tradename' => 'DavaDev',
            'rfc' => 'XAXX010101000',
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
            'folio' => "1",
            'serie' => 'Factura-',
            'no_exterior' => '0',
            'no_inside' => '0',
            'certificate' => 'centificado',
            'key_private' => 'AAAAA',
            'password' => '1234A',
            'name_pac' => 'AAAA',
            'production_pac' => 'no',
            'password_pac' => 'AAAA',
            'name_tax' => [
                'IVA'
            ],
            'tasa_tax' => [
                '0.16'
            ],
            'factor_tax' => [
                'tasa'
            ],
            'type_tax' => [
                'traslado'
            ],
            'tax_tax' => [
                'iva'
            ],
            'code_currency' => [
                'MXN'
            ],
            'name_currency' => [
                'peso mexicano'
            ],
            'type_currency' => [
                '1.0'
            ],
        ])->assertSessionMissing('Datos Guardados');

        //dd($re);
        
        $this->assertDatabaseHas('bussines', [
            'bussine_name' => 'danielvera'
        ]);

        $this->assertDatabaseHas('currencies', [
            'code' => 'MXN'
        ]);

        $this->assertDatabaseHas('taxes', [
            'name' => 'IVA'
        ]);
    }

    protected function authentication($bussine_id)
    {
        DB::table('users')->truncate();   

        User::create([
            'bussine_id' => $bussine_id,
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
    }
}
