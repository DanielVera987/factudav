<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'id' => 1,
            'name' =>  'Aguascalientes',
            'abbreviation' =>  'Ags.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 2,
            'name' =>  'Baja California',
            'abbreviation' =>  'BC',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 3,
            'name' =>  'Baja California Sur',
            'abbreviation' =>  'BCS',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 4,
            'name' =>  'Campeche',
            'abbreviation' =>  'Camp.',
            'country_id' =>  1
        ]);
        
        State::create([
            'id' => 5,
            'name' =>  'Coahuila de Zaragoza',
            'abbreviation' =>  'Coah.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 6,
            'name' =>  'Colima',
            'abbreviation' =>  'Col.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 7,
            'name' =>  'Chiapas',
            'abbreviation' =>  'Chis.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 8,
            'name' =>  'Chihuahua',
            'abbreviation' =>  'Chih.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 9,
            'name' =>  'Distrito Federal',
            'abbreviation' =>  'DF',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 10,
            'name' =>  'Durango',
            'abbreviation' =>  'Dgo.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 11,
            'name' =>  'Guanajuato',
            'abbreviation' =>  'Gto.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 12,
            'name' =>  'Guerrero',
            'abbreviation' =>  'Gro.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 13,
            'name' =>  'Hidalgo',
            'abbreviation' =>  'Hgo.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 14,
            'name' =>  'Jalisco',
            'abbreviation' =>  'Jal.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 15,
            'name' =>  'México',
            'abbreviation' =>  'Mex.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 16,
            'name' =>  'Michoacán de Ocampo',
            'abbreviation' =>  'Mich.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 17,
            'name' =>  'Morelos',
            'abbreviation' =>  'Mor.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 18,
            'name' =>  'Nayarit',
            'abbreviation' =>  'Nay.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 19,
            'name' =>  'Nuevo León',
            'abbreviation' =>  'NL.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 20,
            'name' =>  'Oaxaca',
            'abbreviation' =>  'Oax.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 21,
            'name' =>  'Puebla',
            'abbreviation' =>  'Pue.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 22,
            'name' =>  'Querétaro',
            'abbreviation' =>  'Qro.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 23,
            'name' =>  'Quintana Roo',
            'abbreviation' =>  'Q. Roo',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 24,
            'name' =>  'San Luis Potosí',
            'abbreviation' =>  'SLP',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 25,
            'name' =>  'Sinaloa',
            'abbreviation' =>  'Sin.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 26,
            'name' => 'Sonora',
            'abbreviation' =>  'Son.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 27,
            'name' =>  'Tabasco',
            'abbreviation' =>  'Tab.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 28,
            'name' =>  'Tamaulipas',
            'abbreviation' =>  'Tamps.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 29,
            'name' =>  'Tlaxcala',
            'abbreviation' =>  'Tlax.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 30,
            'name' =>  'Veracruz de Ignacio de la Llave',
            'abbreviation' =>  'Ver.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 31,
            'name' =>  'Yucatán',
            'abbreviation' =>  'Yuc.',
            'country_id' =>  1
        ]);

        State::create([
            'id' => 32,
            'name' =>  'Zacatecas',
            'abbreviation' =>  'Zac.',
            'country_id' =>  1
        ]);
    }
}
