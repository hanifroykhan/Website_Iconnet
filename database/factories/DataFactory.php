<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Data::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'salary' => $this ->faker->numberBetween(30000,50000),
            'department' => $this->faker->randomElement(array('accounting','marketing','sales','quality'))
        ];
    }
}
