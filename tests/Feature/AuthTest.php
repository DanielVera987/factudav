<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    function test_load_raiz()
    {
        $response = $this->get('/');
        $response->assertRedirect(route('login'));
    }   

    function test_load_view_login()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    function test_load_error_404()
    {
        $response = $this->get('/noexiste');
        $response->assertStatus(404);
    }

    function test_singup_raiz_form()
    {
        User::create([
            'name' => 'daniel vera',
            'email' => 'danielveraangulo703@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'daniel vera'
        ]);

        $this->from('/')
            ->post('/login', [
                'email' => 'danielveraangulo703@gmail.com',
                'password' => '12345678'
            ])->assertRedirect('/dashboard');
    }

    function test_singup_form()
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'daniel vera',
            'email' => 'danielveraangulo703@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'daniel vera'
        ]);

        $this->from('/login')
            ->post('/login', [
                'email' => 'danielveraangulo703@gmail.com',
                'password' => '12345678'
            ])->assertRedirect('/dashboard');
    }

    function test_email_incorrect() 
    {
        $this->from('/login')
            ->post('/login', [
                'email' => 'email incorrect',
                'password' => '12345678'
            ])
            ->assertRedirect('/login')
            ->assertSessionHasErrors(['email' => 'These credentials do not match our records.']);
    }

    function test_password_incorrect() 
    {
        $this->from('/login')
            ->post('/login', [
                'email' => 'danielveraangulo703@gmail.com',
                'password' => 'passincorrect'
            ])
            ->assertRedirect('/login')
            ->assertSessionHasErrors(['email' => 'These credentials do not match our records.']);
    }

    function test_load_view_register()
    {
        $this->get('/register')
            ->assertStatus(200)
            ->assertSee('Register');
    }

    function test_create_new_register_form()
    {
        $this->from('/register')
            ->post('/register', [
                'name' => 'UserTest',
                'email' => 'e@gmail.com',
                'password' => '12345678',
                'password_confirmation' => '12345678'
            ])->assertRedirect('/dashboard');
        
        $this->assertDatabaseHas('users', [
            'name' => 'UserTest',
            'email' => 'e@gmail.com'
        ]);
    }

    function test_name_required_register() 
    {
        $this->from('/register')
        ->post('/register', [
            'name' => '',
            'email' => 'e@gmail.com',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ])->assertRedirect('/register');
    }

    function test_email_required_register() 
    {
        $this->from('/register')
        ->post('/register', [
            'name' => 'test',
            'email' => '',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ])->assertRedirect('/register');
    }
}
