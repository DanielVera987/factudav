<?php

namespace Database\Seeders;

use App\Models\WayToPay;
use Illuminate\Database\Seeder;

class WayToPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WayToPay::create([
            'code' => '01',
            'name' => 'Efectivo'
        ]);

        WayToPay::create([
            'code' => '02',
            'name' => 'Cheque nominativo'
        ]);

        WayToPay::create([
            'code' => '03',
            'name' => 'Transferencia electrónica de fondos'
        ]);

        WayToPay::create([
            'code' => '04',
            'name' => 'Tarjeta de crédito'
        ]);

        WayToPay::create([
            'code' => '05',
            'name' => 'Monedero electrónico'
        ]);

        WayToPay::create([
            'code' => '06',
            'name' => 'Dinero electrónico'
        ]);

        WayToPay::create([
            'code' => '08',
            'name' => 'Vales de despensa'
        ]);

        WayToPay::create([
            'code' => '12',
            'name' => 'Dación en pago'
        ]);

        WayToPay::create([
            'code' => '13',
            'name' => 'Pago por subrogación'
        ]);

        WayToPay::create([
            'code' => '14',
            'name' => 'Pago por consignación'
        ]);

        WayToPay::create([
            'code' => '15',
            'name' => 'Condonación'
        ]);

        WayToPay::create([
            'code' => '17',
            'name' => 'Compensación'
        ]);

        WayToPay::create([
            'code' => '23',
            'name' => 'Novación'
        ]);

        WayToPay::create([
            'code' => '24',
            'name' => 'Confusión'
        ]);

        WayToPay::create([
            'code' => '25',
            'name' => 'Remisión de deuda'
        ]);

        WayToPay::create([
            'code' => '26',
            'name' => 'Prescripción o caducidad'
        ]);

        WayToPay::create([
            'code' => '27',
            'name' => 'A satisfacción del acreedor'
        ]);

        WayToPay::create([
            'code' => '28',
            'name' => 'Tarjeta de débito'
        ]);

        WayToPay::create([
            'code' => '29',
            'name' => 'Tarjeta de servicios'
        ]);

        WayToPay::create([
            'code' => '30',
            'name' => 'Aplicación de anticipos'
        ]);

        WayToPay::create([
            'code' => '99',
            'name' => 'Por definir'
        ]);
    }
}
