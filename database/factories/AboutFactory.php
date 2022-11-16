<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('simon'),
            'tinytext' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(15),
            'picture' => $this->faker->url(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
