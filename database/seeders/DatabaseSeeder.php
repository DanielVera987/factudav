<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bussine;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'bussine_id' => null,
            'name' => 'daniel',
            'email' => 'test@test.com',
            'password' => bcrypt('123456')
        ]);
        Bussine::factory(10)->create();
        Country::factory(10)->create();
    }
}
