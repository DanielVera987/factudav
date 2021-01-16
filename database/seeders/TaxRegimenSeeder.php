<?php

namespace Database\Seeders;

use App\Models\TaxRegimen;
use Illuminate\Database\Seeder;

class TaxRegimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Tax Regimens Fisicas */

        TaxRegimen::create([
            'code' => '605',
            'name' => 'Sueldos y Salarios e Ingresos Asimilados a Salarios'
        ]);

        TaxRegimen::create([
            'code' => '606',
            'name' => 'Arrendamiento'
        ]);

        TaxRegimen::create([
            'code' => '608',
            'name' => 'Demás ingresos'
        ]);

        TaxRegimen::create([
            'code' => '611',
            'name' => 'Ingresos por Dividendos (socios y accionistas)'
        ]);

        TaxRegimen::create([
            'code' => '612',
            'name' => 'Personas Físicas con Actividades Empresariales y Profesionales'
        ]);

        TaxRegimen::create([
            'code' => '614',
            'name' => 'Ingresos por intereses'
        ]);

        TaxRegimen::create([
            'code' => '615',
            'name' => 'Régimen de los ingresos por obtención de premios'
        ]);

        TaxRegimen::create([
            'code' => '616',
            'name' => 'Sin obligaciones fiscales'
        ]);

        TaxRegimen::create([
            'code' => '621',
            'name' => 'Incorporación Fiscal'
        ]);

        TaxRegimen::create([
            'code' => '622',
            'name' => 'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras'
        ]);

        TaxRegimen::create([
            'code' => '629',
            'name' => 'De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales'
        ]);

        TaxRegimen::create([
            'code' => '630',
            'name' => 'Enajenación de acciones en bolsa de valores'
        ]);

        /* Tax Regimens Moral */

        TaxRegimen::create([
            'code' => '601',
            'name' => 'General de Ley Personas Morales'
        ]);

        TaxRegimen::create([
            'code' => '603',
            'name' => 'Personas Morales con Fines no Lucrativos'
        ]);

        TaxRegimen::create([
            'code' => '607',
            'name' => 'Régimen de Enajenación o Adquisición de Bienes'
        ]);

        TaxRegimen::create([
            'code' => '609',
            'name' => 'Consolidación'
        ]);

        TaxRegimen::create([
            'code' => '620',
            'name' => 'Sociedades Cooperativas de Producción que optan por Diferir sus Ingresos'
        ]);

        TaxRegimen::create([
            'code' => '622',
            'name' => 'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras'
        ]);

        TaxRegimen::create([
            'code' => '623',
            'name' => 'Opcional para Grupos de Sociedades'
        ]);

        TaxRegimen::create([
            'code' => '624',
            'name' => 'Coordinados'
        ]);

        TaxRegimen::create([
            'code' => '628',
            'name' => 'Hidrocarburos'
        ]);

        
    }
}
