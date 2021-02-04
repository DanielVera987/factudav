<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bussine_id' => 1,
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(10),
            'code' => $this->faker->randomDigit(),
            'stock' => $this->faker->randomDigit(),
            'amount' => $this->faker->randomFloat($nbMaxDecimals = NULL),
            'quantity' => $this->faker->randomDigit(),
            'image' => $this->faker->randomDigit(),
        ];
    }
}
