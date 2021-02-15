<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bussine_id' => 1,
            'invoice_id' => 1,
            'product_id' => $this->faker->randomDigit(),
            'produserv_id' => $this->faker->randomDigit(),
            'unit_id' => $this->faker->randomDigit(),
            'description' => $this->faker->sentence(10),
            'quantity' => $this->faker->randomDigit(),
            'discount' => $this->faker->randomNumber(2, true),
            'amount' => $this->faker->randomFloat(2, 10, 100),  
        ];
    }
}
