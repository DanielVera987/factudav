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
            'bussine_id' => 1,
            'bussine_name' => 'PUBLICO EN GENERAL',
            'tradename' => 'PUBLICO EN GENERAL',
            'rfc' => 'XAXX010101000',
            'email' => 'test@test.com',
            'telephone' => '9999999999',
            'usecfdi_id' => 3,
            'country_id' => 1,
            'state_id' => 22,
            'municipality_id' => 1,
            'location' => 'Cozumel',
            'street' => '0',
            'colony' => '0',
            'zip' => '77666',
            'no_exterior' => '0',
            'no_inside' => '0',
            'street_reference' => '',
            'type' => 1, //1 cliente, 2 proveedor
        ];
    }
}
