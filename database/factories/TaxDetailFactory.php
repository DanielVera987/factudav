<?php

namespace Database\Factories;

use App\Models\TaxDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaxDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'detail_id' => 1,
            'tax_id' => 1,
        ];
    }
}
