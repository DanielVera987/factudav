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
            'code' => $this->faker->unique()->randomDigit(),
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(10),
            'stock' => $this->faker->randomDigit(),
            'alert_stock' => $this->faker->randomDigit(),
            'cost' => $this->faker->randomFloat($nbMaxDecimals = NULL),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL),
            'unit_id' => $this->faker->randomDigit(),
            'image' => $this->faker->randomDigit(),
            'is_active' => $this->faker->randomDigit(),
        ];
    }
}
