<?php

namespace Database\Factories;

use App\Models\Bussine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

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
        //$nameFile = $this->faker->image('public/images/logos', 480, 480);
        //dd($nameFile);
        return [
            'bussine_name' => $this->faker->company(),
            'tradename' => $this->faker->company(),
            'rfc' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber(),
            'type_person' => $this->faker->word(),
            'taxregimen_id' => $this->faker->randomDigit(),
            'country_id' => 1,
            'state_id' => $this->faker->randomDigit(),
            'municipality_id' => $this->faker->randomDigit(),
            'location' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'colony' => $this->faker->city(),
            'zip' => $this->faker->postcode(),
            'no_exterior' => $this->faker->randomNumber(3, true),
            'no_inside' => $this->faker->randomNumber(3, true),
            'certificate' => $this->faker->word(),
            'key_private' => $this->faker->word(),
            'password' => $this->faker->word(),
            'name_pac' => $this->faker->word(),
            'password_pac' => $this->faker->word(),
            'logo' => ''
        ];
    }
}
