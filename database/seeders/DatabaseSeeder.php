<?php

namespace Database\Seeders;

use App\Models\Tax;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Customer;
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
            UsecfdiSeeder::class,
            UserSeeder::class
        ]);
        
        /* Call Factories */
        //User::factory(10)->create();  
        //Bussine::factory(1)->create();
        Currency::factory()->create();
        Tax::factory()->create();
        Product::factory()->create();
        Customer::factory(10)->create();
    }
}
