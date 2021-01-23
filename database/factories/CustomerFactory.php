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
            'bussine_id' => '',
            'bussine_name' => '',
            'RFC' => '',
            'email' => '',
            'telephone' => '',
            'usecfdi_id' => '',
            'tradename' => '',
            'country_id' => '',
            'state_id' => '',
            'municipality_id' => '',
            'location' => '',
            'street' => '',
            'colony' => '',
            'zip' => '',
            'no_exterior' => '',
            'no_inside' => '',
            'street_reference' => '',
            'type' => '',
        ];
    }
}
