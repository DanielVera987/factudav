<?php

namespace Database\Factories;

use App\Models\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tax::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bussine_id' => 1, //default
            'name' => 'iva trasladado',
            'tax' => 'iva',
            'type' => 'traslado',
            'factor' => 'tasa',
            'tasa' => 0.16
        ];
    }
}
