<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_name' => $this->faker->name(),
            'project_description' => $this->faker->sentence(15),
            'github' => $this->faker->url(),
            'demo' => $this->faker->url(),
            'picture' => $this->faker->url(),
        ];
    }
}
