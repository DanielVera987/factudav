<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Bussine;

class BussineTest extends TestCase
{
    use RefreshDatabase;

    // DataBase

    function test_create_new_bussine_with_user()
    {
        $user = User::create([
            'name' => 'Daniel Vera',
            'email' => 'danielveraangulo703@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Daniel Vera'
        ]);

        if (!$user->bussine_id) {
            $bussine_id = Bussine::factory()->create();
            
            $user->bussine_id = $bussine_id->id;
            $user->save();

            $this->assertDatabaseHas('users', [
                'id' => $user->id,
                'bussine_id' => $bussine_id->id
            ]);
        }
    }

    //Logic

    //Views

    //Routes
}
