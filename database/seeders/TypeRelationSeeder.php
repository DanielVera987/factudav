<?php

namespace Database\Seeders;

use App\Models\TypeRelation;
use Illuminate\Database\Seeder;

class TypeRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeRelation::create([
            'code' => '01',
            'name' => 'Notas de Crédito de Documentos Relacionados'
        ]);

        TypeRelation::create([
            'code' => '02',
            'name' => 'Notas de Débito de los Documentos Relacionados'
        ]);

        TypeRelation::create([
            'code' => '03',
            'name' => 'Devolución de Mercancías sobre Facturas o Traslados Previos'
        ]);

        TypeRelation::create([
            'code' => '04',
            'name' => 'Sustitución de los CFDI Previos'
        ]);

        TypeRelation::create([
            'code' => '05',
            'name' => 'Traslados de Mercancías Facturados Previamente'
        ]);

        TypeRelation::create([
            'code' => '06',
            'name' => 'Factura Generada por los Traslados Previos'
        ]);

        TypeRelation::create([
            'code' => '07',
            'name' => 'CFDI por Aplicación de Anticipo'
        ]);

        TypeRelation::create([
            'code' => '08',
            'name' => 'Facturas Generadas por Pagos en Parcialidades'
        ]);

        TypeRelation::create([
            'code' => '09',
            'name' => 'Factura Generada por Pagos Diferidos'
        ]);
    }
}
