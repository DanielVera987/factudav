<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bussine;
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
        /* Call Seeders */
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            MunicipalitySeeder::class,
            TaxRegimenSeeder::class,
            UserSeeder::class
        ]);
        
        /* Call Factories */
        //User::factory(10)->create();  
        //Bussine::factory(1)->create();
    }
}
