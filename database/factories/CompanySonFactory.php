<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanySonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->company(),
            'Email' => $this->faker->companyEmail(),
            'Password' => $this->faker->password(),
        ];
    }
}