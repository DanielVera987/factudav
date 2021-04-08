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
            'code' => '0000000001',
            'name' => 'producto prueba',
            'description' => 'producto prueba',
            'stock' => '10',
            'alert_stock' => '2',
            'cost' => '30.00',
            'price' => '32.00',
            'produserv_id' => 1,
            'unit_id' => 1,
            'image' => $this->faker->randomDigit(),
            'is_active' => 'on',
        ];
    }
}
