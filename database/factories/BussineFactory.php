<?php

namespace Database\Factories;

use App\Models\Bussine;
use Illuminate\Database\Eloquent\Factories\Factory;

class BussineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bussine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bussine_name' => $this->faker->company(),
            'tradename' => $this->faker->company(),
            'rfc' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber(),
            'type_person' => $this->faker->word(),
            'taxregime_id' => $this->faker->sentence(),
            'curp' => $this->faker->randomNumber(5, true),
            'country_id' => $this->faker->country(),
            'state_id' => $this->faker->state(),
            'municipality_id' => $this->faker->city(),
            'location' => $this->faker->city(),
            'no_inside' => $this->faker->randomNumber(3, true),
            'no_exterior' => $this->faker->randomNumber(3, true),
            'zip' => $this->faker->postcode(),
            'colony' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'certificate' => $this->faker->word(),
            'key_certificate' => $this->faker->word(),
            'key_private' => $this->faker->word(),
        ];
    }
}
