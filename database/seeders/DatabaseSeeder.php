<?php

namespace Database\Seeders;

use App\Models\Tax;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Detail;
use App\Models\TaxDetail;
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
            PaymentMethodSeeder::class,
            WayToPaySeeder::class,
            UnitSeeder::class,
            ProduServSeeder::class,
            UserSeeder::class
        ]);
        
        /* Call Factories */
        //User::factory(10)->create();  
        //Bussine::factory(1)->create();
        Currency::factory()->create();
        Tax::factory()->create();
        Product::factory()->create();
        Customer::factory(10)->create();
        //Invoice::factory(10)->create();
        Detail::factory(10)->create();
        TaxDetail::factory(5)->create();
    }
}
