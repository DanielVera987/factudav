<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'code' => 'PUE',
            'name' => 'Pago en Una Exhibición'
        ]);

        PaymentMethod::create([
            'code' => 'PPD',
            'name' => 'Pago en Parcialidades o Diferido'
        ]);
    }
}
