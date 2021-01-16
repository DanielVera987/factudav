<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'bussine_id' => null,
            'name' => 'daniel',
            'email' => 'test@test.com',
            'password' => bcrypt('123456')
        ]);
    }
}
