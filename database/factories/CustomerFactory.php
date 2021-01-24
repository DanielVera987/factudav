<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bussine_id' => $this->faker->randomDigit(),
            'bussine_name' => $this->faker->company(),
            'tradename' => $this->faker->companySuffix(),
            'rfc' => $this->faker->swiftBicNumber(),
            'email' => $this->faker->email(),
            'telephone' => $this->faker->tollFreePhoneNumber(),
            'usecfdi_id' => $this->faker->randomDigit(),
            'country_id' => 1,
            'state_id' => $this->faker->randomDigit(),
            'municipality_id' => $this->faker->randomDigit(),
            'location' => $this->faker->cityPrefix(),
            'street' => $this->faker->streetAddress(),
            'colony' => $this->faker->country(),
            'zip' => $this->faker->postcode(),
            'no_exterior' => $this->faker->buildingNumber(),
            'no_inside' => $this->faker->buildingNumber(),
            'street_reference' => $this->faker->address(),
            'type' => $this->faker->randomDigit(), //1 cliente, 2 proveedor
        ];
    }
}
