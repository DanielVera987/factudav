<?php

namespace Database\Seeders;

use App\Models\Usecfdi;
use Illuminate\Database\Seeder;

class UsecfdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usecfdi::create([
            'code' => 'G01',
            'name' => 'Adquisición de mercancias'
        ]);

        Usecfdi::create([
            'code' => 'G02',
            'name' => 'Devoluciones, descuentos o bonificaciones'
        ]);

        Usecfdi::create([
            'code' => 'G03',
            'name' => 'Gastos en general'
        ]);

        Usecfdi::create([
            'code' => 'I01',
            'name' => 'Construcciones'
        ]);

        Usecfdi::create([
            'code' => 'I02',
            'name' => 'Mobilario y equipo de oficina por inversiones'
        ]);

        Usecfdi::create([
            'code' => 'I03',
            'name' => 'Equipo de transporte'
        ]);

        Usecfdi::create([
            'code' => 'I04',
            'name' => 'Equipo de computo y accesorios'
        ]);

        Usecfdi::create([
            'code' => 'I05',
            'name' => 'Dados, troqueles, moldes, matrices y herramental'
        ]);

        Usecfdi::create([
            'code' => 'I06',
            'name' => 'Comunicaciones telefónicas'
        ]);

        Usecfdi::create([
            'code' => 'I07',
            'name' => 'Comunicaciones satelitales'
        ]);

        Usecfdi::create([
            'code' => 'I08',
            'name' => 'Otra maquinaria y equipo'
        ]);

        Usecfdi::create([
            'code' => 'D01',
            'name' => 'Honorarios médicos, dentales y gastos hospitalarios.'
        ]);

        Usecfdi::create([
            'code' => 'D02',
            'name' => 'Gastos médicos por incapacidad o discapacidad'
        ]);

        Usecfdi::create([
            'code' => 'D03',
            'name' => 'Gastos funerales'
        ]);

        Usecfdi::create([
            'code' => 'D04',
            'name' => 'Donativos'
        ]);

        Usecfdi::create([
            'code' => 'D05',
            'name' => 'Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)'
        ]);

        Usecfdi::create([
            'code' => 'D06',
            'name' => 'Aportaciones voluntarias al SAR'
        ]);

        Usecfdi::create([
            'code' => 'D07',
            'name' => 'Primas por seguros de gastos médicos.'
        ]);

        Usecfdi::create([
            'code' => 'D08',
            'name' => 'Gastos de transportación escolar obligatoria'
        ]);

        Usecfdi::create([
            'code' => 'D09',
            'name' => 'Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones'
        ]);

        Usecfdi::create([
            'code' => 'D10',
            'name' => 'Pagos por servicios educativos (colegiaturas)'
        ]);

        Usecfdi::create([
            'code' => 'P01',
            'name' => 'Por definir'
        ]);
    }
}
