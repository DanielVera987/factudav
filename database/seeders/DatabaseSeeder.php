<?php

namespace Database\Seeders;

use App\Models\Tax;
use App\Models\Detail;
use App\Models\Bussine;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Customer;
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
            UserSeeder::class,
            TypeRelationSeeder::class
        ]);
    }
}
