<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Model\User;

class AuthTest extends TestCase
{
    function test_load_view_login()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    function test_singup()
    {
        $this->from('/login')
            ->post('/login', [
                'email' => 'danielveraangulo703@gmail.com',
                'password' => '12345678'
            ])->assertRedirect('/home');
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
            ])->assertRedirect('/home');
    }
}
