<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bussine_id' => 1,
            'customer_id' => 1,
            'folio' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'way_to_pay' => $this->faker->randomDigit(),
            'currency_id' => $this->faker->randomDigit(),
            'payment_method_id' => $this->faker->randomDigit(),
            'usecfdi' => $this->faker->randomDigit(),
            'date' => $this->faker->dateTime(),
        ];
    }
}
